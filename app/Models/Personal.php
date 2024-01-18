<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //use HasFactory;
    protected $table = 'e12personal';

     protected $fillable = [
                            'id',
                            'id_user',
                            'rfc',
                            'emp_pat',
                            'emp_mat',
                            'emp_nom',
                            'nom_emp',
                            'emp_curp',
                            'cod_pago',
                            'unidad',
                            'subunidad',
                            'cat_puesto',
                            'horas',
                            'cons_plaza',
                            'estatus_plaza',
                            'oclave',
                            'onombre_ct',
                            'odomicilio',
                            'onombre_colonia',
                            'nombre_loc',
                            'nombre_mun',
                            'rcvelocalidad_inegi',
                            'ocodigopostal',
                            'otelefono',
                            'municipio',
                            ];
 }
