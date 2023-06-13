<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('number');
            $table->integer('floor');
            $table->foreignId('building_id')->constrained();


        });
    }



    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
