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
        if (!Schema::hasTable('glampingmodels')) {
        Schema::create('glampingmodels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 12, 2)->unsigned();
            $table->integer('capacity');
            $table->json('facilities');
            $table->string('image');
            $table->float('rating');
            $table->string('location');
            $table->boolean('is_availability');
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('glamping');
    }
};
