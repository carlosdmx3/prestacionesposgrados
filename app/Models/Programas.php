<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    //use HasFactory;
    protected $table = 'e12programas';
    protected $fillable = [ 'id', 'id_formacion', 'oprograma', ];
}
