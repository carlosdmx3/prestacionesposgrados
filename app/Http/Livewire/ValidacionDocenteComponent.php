<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Controllers\OtroController;

use App\Models\DatosPersonales;
use App\Models\EtapasAvances;

class ValidacionDocenteComponent extends Component
{
    public $elrfc, $elmail;

    public $informacion = '';

    protected $listeners = ['infoRecibida' => 'actualizarInfo'];

    public function actualizarInfo($data, $rfc, $name, $mail, $elfolio)
    {
        $this->informacion = $data;
        $this->informacion2 = $name;
        $this->informacion3 = $mail;
        $this->informacion4 = $rfc;
        $this->informacion5 = $elfolio;

    }

    public function render()
    {
        return view('livewire.validacion-docente-component');

    }


}
