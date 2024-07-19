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
        Schema::table('abouts', function (Blueprint $table) {
            $table->text('description')->change();
            $table->text('subTitle')->change();
            $table->text('myPersonalInfo')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('description', 255)->change();
            $table->string('subTitle', 255)->change();
            $table->string('myPersonalInfo', 255)->change();
        });
    }
};
