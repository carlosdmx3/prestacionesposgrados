<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosLaborales extends Model
{
    //use HasFactory;
    protected $table = 'e12datoslaborales';

     protected $fillable = ['id', 
                            'id_user',
                            'ofuncion', 
                            'oantiguedad', 
                            'oingreso_sep', 
                            'oanios_servicio_actual', 
                            'oanios_nivel_actual', 
                            'oservicio_modalidad',                         
                            'oban_fin'
                            ];
 }
