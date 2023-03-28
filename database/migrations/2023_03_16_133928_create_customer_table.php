<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name',55);
            $table->string('gmail', 255);
            $table->enum('gender', ["Male", "Female", "Custom"])->nullable();
            $table->text('address', 255);
            $table->date('dob')->nullable();
            $table->string('password', 55);
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
