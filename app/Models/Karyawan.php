<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'users';
    protected $fillable = ['no_peg', 'name', 'email', 'password','department_id', 'position_id', 'role_id','jml_cuti'];
    
    public function department()
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
