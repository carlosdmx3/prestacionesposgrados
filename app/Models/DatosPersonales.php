<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    //use HasFactory;
    protected $table = 'e12datospersonales';

     protected $fillable = ['id', 
                            'id_user',
                            'otelcel', 
                            'otelfijo', 
                            'odomicilio', 
                            'onumero', 
                            'onumeroint', 
                            'ocolonia', 
                            'ocp', 
                            'olocalidad', 
                            'omunicipio', 
                            'oestado', 
                            'onombrefamiliar', 
                            'oparentesco', 
                            'otelfamiliar', 
                            'otelfijofamiliar', 
                            'oban_fin', 
                            ];
 }
