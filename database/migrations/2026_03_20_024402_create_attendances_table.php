<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->foreignId('employee_id');
            $table->time('check_in');
            $table->time('check_out');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};