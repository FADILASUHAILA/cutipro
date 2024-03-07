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
        Schema::create('cutis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('jenis_cuti');
            $table->text('keterangan')->nullable();
            $table->integer('jml_cuti');
            $table->date('cuti_start');
            $table->date('cuti_end');
            $table->date('masuk_kerja');
            $table->string('alamat')->nullable();
            $table->string('telp')->nullable();
            $table->timestamps();

            // Definisi kunci asing
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutis');
    }
};
