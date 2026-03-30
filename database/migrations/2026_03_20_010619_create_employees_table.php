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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date("date of born");
            $table->string("sex");
            $table->string("phone");
            $table->string("email");
            $table->string("place of born");
            $table->string("experience");
            $table->string("shirt");
            $table->string("status");
            $table->string("hired_date");

            $table->float("salary");

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
