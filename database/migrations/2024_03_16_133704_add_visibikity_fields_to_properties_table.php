<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->boolean('is_price_visible')->default(false);
            $table->boolean('is_location_visible')->default(false);
            $table->boolean('is_area_visible')->default(false);
            $table->boolean('is_rooms_visible')->default(false);
            $table->boolean('is_bathrooms_visible')->default(false);
            $table->boolean('is_year_visible')->default(false);
            $table->boolean('is_type_visible')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('is_price_visible');
            $table->dropColumn('is_location_visible');
            $table->dropColumn('is_area_visible');
            $table->dropColumn('is_rooms_visible');
            $table->dropColumn('is_bathrooms_visible');
            $table->dropColumn('is_year_visible');
            $table->dropColumn('is_type_visible');
        });
    }
};
