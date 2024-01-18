

    <table  class=" table-sm" style="font-size:12px;" width="90%" align="center">
    <tr >
        <td width="20%"class="btn btn-outline-secondary shadow 
                    @if($avance->opersonales_open==1) bg-lime @endif" 
                    @if($avance->odatos_personales==1) wire:click='editPersonales(1)' @endif
                    @if($avance->odatos_personales==0) disabled @endif
                        style="border-radius: 10px;">
                    <img src="img/personales.png" class="img-fluid" width="35%">
                    <center style="font-size:16px;">
                        <b>DATOS PERSONALES</b>
                    </center>
        </td>    
        <td width="20%"class="btn btn-outline-secondary shadow 
                    @if($avance->oescolares_open==1) bg-lime @endif"
                    @if($avance->odatos_escolares==1) wire:click='editEscolares(1)' @endif
                    @if($avance->odatos_escolares==0) disabled @endif
                        style="border-radius: 10px;">
                    <img src="img/escolares.png" class="img-fluid" width="35%">
                    <center style="font-size:16px;">
                        <b>DATOS ESCOLARES</b>
                    </center>
        </td>
        <td width="20%" class="btn btn-outline-secondary shadow 
                    @if($avance->olaborales_open==1) bg-lime @endif"
                    @if($avance->odatos_laborales==1) wire:click='editLaborales(1)' @endif
                    @if($avance->odatos_laborales==0) disabled @endif
                        style="border-radius: 10px;">
                    <img src="img/laborales.png" class="img-fluid" width="35%">
                    <center style="font-size:16px;">
                        <b>DATOS LABORALES</b>
                    </center>
        </td>
        <td width="20%" class="btn btn-outline-secondary shadow 
                    @if($avance->oprograma_open==1) bg-lime @endif"
                    @if($avance->odatos_programa==1) wire:click='editPrograma(1)' @endif
                    @if($avance->odatos_programa==0) disabled @endif
                        style="border-radius: 10px;">
                    <img src="img/programa.png" class="img-fluid" width="35%">
                    <center style="font-size:16px;">
                        <b>DATOS PRESTACIÓN</b>
                    </center>
        </td>
        <td width="20%" class="btn btn-outline-secondary shadow 
                    @if($avance->odocumentos_open==1) bg-lime @endif"
                    @if($avance->odocumentos==1) wire:click='editDocumentos(1)' @endif
                    @if($avance->odocumentos==0) disabled @endif
                    style="border-radius: 10px;">
                <img src="img/filee.png" class="img-fluid" width="35%">
                <center style="font-size:16px;">
                        <b>PRE REGISTRO</b>
                </center>
        </td>
    </tr>
    </table>
    <br>