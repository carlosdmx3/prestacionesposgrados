<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folios extends Model
{
    //use HasFactory;
    protected $table = 'e12folios';

     protected $fillable = ['id', 
                            'id_prestacion', 
                            'id_valle',
                            'ofolio', 
                            'oanio',
                            'id_user', 
                            'ouso', 
                            'oaprobado', 
                            'ocancelado', 
                            ];
 }
