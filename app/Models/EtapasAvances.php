<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtapasAvances extends Model
{
    //use HasFactory;
    protected $table = 'e12etapas_avance';

     protected $fillable = ['id', 
                            'id_user',
                            'odatos_personales', 
                            'odatos_escolares', 
                            'odatos_laborales', 
                            'odatos_programa', 
                            'opersonales_open',
                            'oescolares_open',
                            'olaborales_open',
                            'oprograma_open',
                            'ofin_registro',
                            'oprestacion',
                            ];
 }
