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
        Schema::create('psgc_citymun', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prov_id');
            $table->string('citymun_codex');
            $table->string('citymun_name');
            $table->string('district');
            $table->string('cluster');
            $table->foreign('prov_id')->references('id')->on('psgc_prov')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psgc_citymun');
    }
};
