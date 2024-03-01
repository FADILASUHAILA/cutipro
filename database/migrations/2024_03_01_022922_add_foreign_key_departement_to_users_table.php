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
        Schema::table('users', function (Blueprint $table) {
           
                $table->unsignedBigInteger('department')->nullable(); // Kolom yang akan dijadikan foreign key
    
                $table->foreign('department')
                    ->references('id')
                    ->on('departements')
                    ->onDelete('set null'); // Menambahkan foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
           $table->dropForeign(['department']); // Menghapus foreign key
            $table->dropColumn('department'); // Menghapus kolom foreign key
     
        });
    }
};
