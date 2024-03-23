<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;
    
    protected $table = 'listcutis';
    protected $fillable = [
        // Sesuaikan dengan kolom-kolom yang dapat diisi
        'id_user', 'input', 'no_peg', 'nama', 'email', 'departement', 'position', 'jenis_cuti',
        'keterangan', 'jml_cuti', 'sisa_cuti', 'cuti', 'masuk', 'alamat', 'telp',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function departement()
    {
        return $this->belongsTo(Departement::class,);
    }
    
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }


}
