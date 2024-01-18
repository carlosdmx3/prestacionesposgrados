<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentosPS extends Model
{
    //use HasFactory;
    protected $table = 'e12requisitos_ps';
    protected $fillable = [ 'id', 
                            'id_user',
                            'oanio',
                            'odocumento_a',
                            'odocumento_b',
                            'odocumento_c',
                            'odocumento_d',
                            'odocumento_e',
                            'odocumento_f',
                            'odocumento_g',
                            'odocumento_h',
                            'odocumento_i',
                            'odocumento_j',
                            'odocumento_k',
                            'ocarga',
                            ];
}
