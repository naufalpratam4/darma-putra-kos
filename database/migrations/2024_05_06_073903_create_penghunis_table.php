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
        Schema::create('penghunis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nama_lengkap');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->string('pembayaran');
            $table->string('bukti_pembayaran');

            $table->unsignedBigInteger('kamar_id')->nullable();
            $table->timestamps();

            $table->foreign('nama_lengkap')->references('id')->on('calon_penghunis')->onDelete('cascade');
            $table->foreign('kamar_id')->references('id')->on('kamars')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penghunis');
    }
};
