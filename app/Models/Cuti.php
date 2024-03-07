<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'jenis_cuti',
        'keterangan',
        'jml_cuti',
        'cuti_start',
        'cuti_end',
        'masuk_kerja',
        'alamat',
        'telp',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
