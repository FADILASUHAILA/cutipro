<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormCuti extends Model
{
    use HasFactory;
    protected $table = 'formcutis';
    protected $fillable = [
        // sesuaikan dengan field yang bisa diisi pada formulir cuti
        'id_user',
        'role_id',
        'input',
        'no_peg',
        'nama',
        'departement',
        'position',
        'jenis_cuti',
        'keterangan',
        'jml_cuti',
        'sisa_cuti',
        'cuti',
        'masuk',
        'alamat',
        'telp',
        'atasan',
        'alasan_ditolak',
        'is_approve',
    ];

    // Relasi dengan tabel users
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
