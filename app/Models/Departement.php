<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $table = 'departments';
    protected $fillable = ['department_name','ketua_department_name'];

     // untuk relasi one To Many
     public function users() {
        return $this->hasMany(User::class);
    }
}
