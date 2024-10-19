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
        Schema::create('tb_santri', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->unique();
            $table->string('nama_santri');
            $table->enum('jk_santri', ['Laki-laki', 'Perempuan']);
            $table->text('alamat_santri')->nullable();
            $table->text('foto_santri')->nullable();

            $table->string('nama_wali')->nullable();
            $table->string('tlp_wali', 15)->nullable();

            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->timestamps();

            $table->foreign('kelas_id')->references('id')->on('m_kelas')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_santri');
    }
};
