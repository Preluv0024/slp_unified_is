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
        Schema::create('sub_source', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('source_id');
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('role_id');
            $table->string('remarks');
            $table->timestamps();
            $table->foreign('source_id')->references('id')->on('source')->onUpdate('cascade');
            $table->foreign('profile_id')->references('id')->on('profile')->onUpdate('cascade');
            $table->foreign('role_id')->references('id')->on('role')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_source');
    }
};
