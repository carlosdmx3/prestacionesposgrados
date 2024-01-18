<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePrestacion extends Model
{
    //use HasFactory;
    protected $table = 'e12detalles_prestacion';
    protected $fillable = [ 'id',
                            'id_user',
                            'id_prestacion',
                            'oprestacion',
                            'oduracion',
                            'operiodo_inicio',
                            'operiodo_fin',
                            'idmodalidad_ps',
                            'modalidadps',
                            'olineas_po',
                            'otitulo_po',
                            'oobjetivo_po',
                            'odescripcion_po',
                            'olugar_institucion_po',
                            'olugar_po',
                            'ofecha_po',
                            'ointitucion_ep',
                            'onombre_ep',
                            'omodalidad_ep',
                            'otitulo_ep',
                            'olugar_ep',
                            'ofecha_ep',
                            'ointitucion_doc',
                            'onombre_doc',
                            'ojustificacion_doc',
                            'olugar_doc',
                            'ofecha_doc',
                            'oban_inicio',
                            'opreregistro',
                            'ovalidacion',
                            'ocomentarios',
                            'orequisitos',
                            'odictamen',
                            'ofin_prestacion',
                            'oaprobacion',
                            ];
}
