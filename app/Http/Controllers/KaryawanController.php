<?php
namespace App\Models;
namespace App\Http\Controllers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Http\Request;

class KaryawanController extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nomor_pegawai',
        'nama_pegawai',
        'email',
        'password',
        'level',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
