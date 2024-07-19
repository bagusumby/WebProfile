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
        Schema::create('jumbotrons', function (Blueprint $table) {
            $table->id();
            $table->string('background_image');
            $table->string('work');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('github');
            $table->string('linkedin');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumbotrons');
    }
};
