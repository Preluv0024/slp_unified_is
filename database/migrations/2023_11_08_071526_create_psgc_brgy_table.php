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
        Schema::create('psgc_brgy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('citymun_id');
            $table->string('brgy_codex');
            $table->string('brgy_name');
            $table->foreign('citymun_id')->references('id')->on('psgc_citymun')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psgc_brgy');
    }
};
