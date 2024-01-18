<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClavesPresupuestalesComent extends Model
{
    //use HasFactory;
    protected $table = 'e12claves_presupuestales_comentarios';
    protected $fillable = [ 'id', 
                            'id_user',
                            'osi_no',
                            'ocomentario',
                            ];
}
