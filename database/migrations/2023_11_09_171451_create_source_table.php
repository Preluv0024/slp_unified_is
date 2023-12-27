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
        Schema::create('source', function (Blueprint $table) {
            $table->id();
            $table->string('data_id');
            $table->string('data_source');
            $table->unsignedBigInteger('brgy_id');
            $table->string('tagged_as');
            $table->string('tagged_details');
            $table->string('remarks');
            $table->timestamps();
            $table->foreign('brgy_id')->references('id')->on('psgc_brgy')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('source');
    }
};
