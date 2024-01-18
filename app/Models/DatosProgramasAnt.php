<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosProgramasAnt extends Model
{
    //use HasFactory;
    protected $table = 'e12programas_anteriores';

     protected $fillable = ['id', 
                            'id_user', 
                            'obc', 
                            'oinicio_bc', 
                            'ofin_bc', 
                            'ops', 
                            'oinicio_ps',                         
                            'ofin_ps',
                            'ofin_bc', 
                            'oapep', 
                            'oinicio_apep',                         
                            'ofin_apep',
                            'oban_fin', 
                            ];
 }
