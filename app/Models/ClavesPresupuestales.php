<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClavesPresupuestales extends Model
{
    //use HasFactory;
    protected $table = 'e12claves_presupuestales';
    protected $fillable = [ 'id', 
                            'id_user',
                            'oclave',
                            'oct',
                            'onombre_ct',
                            'onivel',
                            'omunicipio',
                            'otelefono',
                            'oban_fin', 
                            ];
}
