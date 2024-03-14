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
        Schema::create('listcutis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->date('input');
            $table->string('no_peg');
            $table->string('email');
            $table->string('nama');
            $table->string('department');
            $table->string('position');
            $table->string('jenis_cuti');
            $table->string('keterangan');
            $table->integer('jml_cuti');
            $table->unsignedBigInteger('sisa_cuti');
            $table->date('cuti');
            $table->date('masuk');
            $table->string('alamat');
            $table->string('telp');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listcutis');
    }
};
