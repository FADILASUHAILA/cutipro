<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = ['departement_name'];

     // untuk relasi one To Many
     public function karyawans() {
        return $this->hasMany(Karyawan::class);
    }
}
