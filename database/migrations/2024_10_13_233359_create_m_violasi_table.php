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
        Schema::create('m_violasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_violasi');
            $table->string('larangan');
            $table->integer('maks');

            $table->unsignedBigInteger('level_id');
            $table->timestamps();

            $table->foreign('level_id')->references('id')->on('m_level')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_violasi');
    }
};
