<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosCentros extends Model
{
    //use HasFactory;
    protected $table = 'e12centros_trabajo';

     protected $fillable = ['id', 
                            'id_user',
                            'oclave1',
                            'oct1',
                            'onombre_ct1',
                            'odomicilio_ct1',
                            'ocolonia_ct1',
                            'ocp_ct1',
                            'olocalidad_ct1',
                            'omunicipio_ct1',
                            'osector_ct1',
                            'ozona_ct1',
                            'otelefono_ct1',
                            'ocorreo_ct1',
                            'odirector_ct1',
                            'osupervisor_ct1',
                            'ojefe_sector_ct1',
                            'oclave2',
                            'oct2',
                            'onombre_ct2',
                            'odomicilio_ct2',
                            'ocolonia_ct2',
                            'ocp_ct2',
                            'olocalidad_ct2',
                            'omunicipio_ct2',
                            'osector_ct2',
                            'ozona_ct2',
                            'otelefono_ct2',
                            'ocorreo_ct2',
                            'odirector_ct2',
                            'osupervisor_ct2',
                            'ojefe_sector_ct2',
                            'oturno_ct1',
                            'oturno_ct2',
                            'oban_fin'
                            ];
 }
