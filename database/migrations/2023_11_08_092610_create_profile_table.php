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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('ext_name')->nullable();
            $table->unsignedBigInteger('brgy_id');
            $table->longText('house_no')->nullable();
            $table->longText('street')->nullable();
            $table->enum('sex', array('MALE', 'FEMALE'))->nullable();
            $table->enum('gender', array('MAN', 'WOMAN'))->nullable();
            $table->date('birth_date')->format('YYYY-MM-DD')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('tin')->nullable();
            $table->string('mobnum')->nullable();
            $table->string('nationality')->nullable();
            $table->string('email')->nullable();
            $table->string('mother_maiden_name')->nullable();
            $table->enum('tagged_as', array('VALIDATED', 'FOR VALIDATION', 'VALIDATED DECEASED', 'UNLOCATED', 'MOVED-OUT'))->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->foreign('brgy_id')->references('id')->on('psgc_brgy')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
