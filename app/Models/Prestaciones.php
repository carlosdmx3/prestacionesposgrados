<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestaciones extends Model
{
    //use HasFactory;
    protected $table = 'e12prestacion';
    protected $fillable = [  'id', 'oprestacion', 'oprestacion2', ];
}
