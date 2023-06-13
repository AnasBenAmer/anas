<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('id_number');
            $table->integer('national_number');
            $table->integer('phone_number');
            $table->string('sex');
            $table->string('city');
            $table->string('room_number');
            $table->foreignId('room_id')->constrained();



        });
    }


    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
