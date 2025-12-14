<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('featured_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->decimal('price', 10, 2);
            $table->string('image')->nullable();
            $table->string('composition')->nullable();
            $table->string('color')->nullable();
            $table->string('width')->nullable();
            $table->string('reference_no')->nullable();
            $table->string('fabric_name')->nullable();
            $table->string('type')->nullable();
            $table->string('samples')->nullable();
            $table->string('origin')->nullable();
            $table->string('moq')->nullable();
            $table->string('export')->nullable();
            $table->string('weight')->nullable();
            $table->string('package')->nullable();
            $table->string('capacity')->nullable();
            $table->string('format')->nullable();
            $table->text('payment_terms')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('port_in_bd')->nullable();
            $table->text('basic_info')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('featured_products');
    }
};
