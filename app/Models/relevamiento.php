<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class relevamiento extends Model
{
    use HasFactory;
    protected $table = 'relevamientos';

    protected $fillable = [
        'empleado',
        'sector',
        'direccionip',
        'email',
        'legajo',
        'telinterno',
    ];
}
