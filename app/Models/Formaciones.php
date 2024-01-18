<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formaciones extends Model
{
    //use HasFactory;
    protected $table = 'e12formaciones';
    protected $fillable = [  'id', 'oformacion', ];
}
