<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'positions';
    protected $fillable = ['positions_name'];
     // untuk relasi one To Many
     public function users() {
        return $this->hasMany(User::class);
    }
}
