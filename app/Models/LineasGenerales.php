<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineasGenerales extends Model
{
    //use HasFactory;
    protected $table = 'e12lineasgenerales';

     protected $fillable = ['id', 
                            'omodalidad',
                            'olinea', 
                            'odescripcion', 
                            ];
 }
