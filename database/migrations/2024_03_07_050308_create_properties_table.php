<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('landlord_id')->constrained('landlords')->onDelete('cascade');
            $table->string('available_from');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('price')->nullable();
            $table->string('location');
            $table->integer('area');
            $table->integer('rooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->enum('type', ['sale', 'rent', 'leasehold','A1', 'A3', 'A5', 'D1', 'B1', 'Studio', 'Flat', 'Maissonete']);
            $table->boolean('is_featured');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
