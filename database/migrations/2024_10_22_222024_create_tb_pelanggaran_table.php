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
        Schema::create('tb_pelanggaran', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');

            $table->unsignedBigInteger('santri_id');
            $table->unsignedBigInteger('violasi_id');
            $table->timestamps();

            $table->foreign('santri_id')->references('id')->on('tb_santri')->onDelete('cascade');
            $table->foreign('violasi_id')->references('id')->on('m_violasi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggaran');
    }
};
