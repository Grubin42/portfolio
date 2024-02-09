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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('species');
            $table->string('family');
            $table->string('type');
            $table->string('origin');
            $table->string('rusticity');
            $table->string('soil');
            $table->integer('height');
            $table->integer('width');
            $table->string('foliage');
            $table->string('foliage_color');
            $table->string('flower_color');
            $table->string('bloom');
            $table->boolean('melliferous');
            $table->string('part_used');
            $table->integer('harvest');
            $table->text('use');
            $table->text('internal_use');
            $table->text('external_use');
            $table->text('contraindication');
            $table->text('culinary');
            $table->string('bibliography');
            $table->boolean('availability');
            $table->string('litrage');
            $table->decimal('price');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
