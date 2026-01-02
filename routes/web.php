
<?php

use App\Models\FeaturedProduct;
// Featured product details page
Route::get('/featured_products/{featured_product}', function (FeaturedProduct $featured_product) {
    $categories = \App\Models\Category::all();
    return view('components.product-details', [
        'product' => $featured_product,
        'categories' => $categories
    ]);
})->name('featured_products.details');

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductRequestController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\LandingController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Landing / Public Routes
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Landing products page
Route::get('/products', [LandingController::class, 'products'])->name('products.list');

// Other landing pages
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');

// Contact form submission
Route::post('/contact', [LandingController::class, 'submitContact'])->name('contact.submit');
Route::post('/contact-submit', [LandingController::class, 'submitContact']);
Route::get('/products/{product}', [LandingController::class, 'productDetails'])->name('products.details');
Route::post('/product/{product}/request', [ProductController::class, 'request'])->name('product.request');

Route::post('/contact', [LandingController::class, 'submitContact'])->name('contact.submit');
// routes/web.php

Route::view('/about-more', 'components.about-more')->name('about-more');
Route::get('/clients-more', [LandingController::class, 'clientsMore'])->name('clients-more');
Route::get('/facility-process', [\App\Http\Controllers\FacilityProcessController::class, 'index'])->name('facility-process');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

/*
|--------------------------------------------------------------------------
| Admin Auth (Simple session-based)
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', function () {
    if (session('is_admin')) {
        return redirect('/admin');
    }
    return view('admin.login');
})->name('admin.login');

Route::post('/admin/login', function (Request $request) {
    $validated = $request->validate([
        'email' => ['required', 'string'],
        'password' => ['required', 'string'],
    ]);

    if ($validated['email'] === 'admin' && $validated['password'] === 'sagar') {
        $request->session()->put('is_admin', true);
        $request->session()->regenerate();
        return redirect()->intended('/admin');
    }

    return back()->with('login_error', 'Invalid credentials')->withInput();
})->name('admin.login.submit');

Route::get('/admin/logout', function (Request $request) {
    $request->session()->forget('is_admin');
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('admin.login');
})->name('admin.logout');

/*
|--------------------------------------------------------------------------
| Admin Routes (Protected by session)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->middleware('admin.session')->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Resources
    Route::resource('products', ProductController::class);
    Route::resource('featured_products', \App\Http\Controllers\Admin\FeaturedProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('expenses', ExpenseController::class);

    // Reports
    Route::get('reports', [ReportController::class, 'index'])->name('reports.index');
    Route::get('reports/export', [ReportController::class, 'exportCsv'])->name('reports.export');

    Route::get('requests', [ProductRequestController::class, 'index'])->name('requests.index');
    Route::get('requests/{request}', [ProductRequestController::class, 'show'])
        ->name('requests.show');
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');

});


/*
|--------------------------------------------------------------------------
| Notes
|--------------------------------------------------------------------------
|
| 1. Admin routes use prefix 'admin'.
| 2. Admin dashboard is at '/admin' and points to DashboardController@index.
| 3. Landing pages remain accessible at root '/'.
| 4. Resource routes handle CRUD for products, categories, clients, employees, expenses.
| 5. Reports routes are separated under 'admin/reports'.
|
*/
