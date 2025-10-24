<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // NOTE: Changing column types requires the doctrine/dbal package for some drivers.
        // If you get an error running this migration, run: composer require doctrine/dbal
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->nullable(false)->change();
        });
    }
};
