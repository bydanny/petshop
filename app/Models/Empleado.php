<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
