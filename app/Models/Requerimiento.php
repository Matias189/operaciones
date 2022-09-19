<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    use HasFactory;

    protected $table = 'request';
    protected $primaryKey= 'id';
    public $timestamps = false;         // timestamps falso para no tener errores
}
