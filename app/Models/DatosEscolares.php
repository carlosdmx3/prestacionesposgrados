<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosEscolares extends Model
{
    //use HasFactory;
    protected $table = 'e12datosescolares';

     protected $fillable = ['id', 
                            'id_user',
                            'oprograma_normal', 
                            'oinstitucion_normal', 
                            'oestatus_normal', 
                            'oprograma_licenciatura', 
                            'oinstitucion_licenciatura', 
                            'oestatus_licenciatura',                         
                            'oprograma_maestria', 
                            'oinstitucion_maestria', 
                            'oestatus_maestria',
                            'oprograma_doctorado', 
                            'oinstitucion_doctorado', 
                            'oestatus_doctorado',
                            'oban_fin'
                            ];
 }
