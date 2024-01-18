<div>

<br>
<!--
<form name="FrmCartel" id="FrmCartel" method="get" >
    @csrf
<table class="table table-sm col-sm-12 guinda letraa">
    <tr>
        <td align="right" class="bg-light" width="20%">
            <b>Buscar por formación</b>
        </td>
        <td width="70%">
            <select name="formaciones" id="formaciones" wire:model="formacion"
                    class="form-control form-control-sm  letraa" 
                    wire:change="ubic($event.target.value)"
                    title="Buscar programa..." >
                <option value="Todas" class="letraa" selected>
                    -- Ver todo --
                </option>
                @foreach($formaciones as $formacion)
                <option value="{{ $formacion->oformacion }}" class="letraa"> 
                    {{ $formacion->oformacion }} 
                </option>
                @endforeach
            </select>
        </td>
    </tr>
</table>
</form>
-->
    <style type="text/css">
    #mapa { height: 500px; }
    </style>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
    function initialize() {
      var marcadores = [
        ['León', 42.603, -5.577],
        ['Salamanca', 40.963, -5.669],
        ['Zamora', 41.503, -5.744]
      ];
      var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 7,
        center: new google.maps.LatLng(41.503, -5.744),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<div id="mapa" class="shadow" style="  border-radius: 20px;"></div>


</div>