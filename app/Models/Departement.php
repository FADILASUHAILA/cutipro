<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $table = 'departements';
    protected $fillable = ['departement_name'];

     // untuk relasi one To Many
     public function Users() {
        return $this->hasMany(User::class);
    }
}
