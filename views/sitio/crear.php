
     <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
          height: 400px;
        }

      </style>

<main class="ttr-wrapper">
  <div class="container-fluid">
    <div class="db-breadcrumb">
      <h4 class="breadcrumb-title">Agregar área</h4>
      <ul class="db-breadcrumb-list">
        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
        <li>Agregar área</li>
      </ul>
    </div>
    <div class="row">
      <!-- Your Profile Views Chart -->
      <div class="col-lg-12 m-b30">
        <div class="widget-box">
          <h1>Define una área</h1>
          <div class="row">
            <div id="map" class="col-md-8"></div>
            <div class="col-md-4">
              <button type="button" onclick="removeLine();" name="button">Reiniciar lineas</button>
              <table class="table" id="ubicacion">
                <thead>
                  <tr>
                    <th scope="col">Latitud</th>
                    <th scope="col">Longitud</th>
                  </tr>
                </thead>
                <tbody id="coordenadas">

                </tbody>
              </table>
            </div>
          </div>

          <div class="widget-inner">

            <form class="edit-profile m-b30" action="<?=base_url?>sitio/guardar" method="post" id="registro">
              <div class="row">
                <div class="col-12">
                  <div class="ml-auto">
                    <h3>1. Información basica</h3>
                  </div>
                </div>
                <div class="form-group col-6">
                  <label for="exampleFormControlSelect1">Nivel de afectación</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="afectacion" required>
                    <option>Grave</option>
                    <option>Importante</option>
                    <option>Normal</option>
                    <option>Bajo</option>

                  </select>
                </div>
                <div class="form-group col-6">
                  <label class="col-form-label">Nombre del sitio</label>
                  <div>
                    <input class="form-control" type="text" value="" name="nombre" required>
                  </div>
                </div>

                <div class="col-12">

                  <button type="submit" class="btn">Guardar sitio</button>
                  <button type="button" class="btn"> <a href="<?=base_url?>sitio/index">Cancelar</a> </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Your Profile Views Chart END-->
    </div>
  </div>
</main>
<script>
// Pricing add
	function newMenuItem() {
		var newElem = $('tr.list-item').first().clone();
		newElem.find('input').val('');
		newElem.appendTo('table#item-add');
	}
	if ($("table#item-add").is('*')) {
		$('.add-item').on('click', function (e) {
			e.preventDefault();
			newMenuItem();
		});
		$(document).on("click", "#item-add .delete", function (e) {
			e.preventDefault();
			$(this).parent().parent().parent().parent().remove();
		});
	}
</script>
<script>

      // This example creates an interactive map which constructs a polyline based on
      // user clicks. Note that the polyline only appears once its path property
      // contains two LatLng coordinates.

      var poly;
      var map;
      var path;
      var json;
      function initMap() {
            $("#coordenadas").html("");
            json=[];
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 18.7626938, lng: -87.7497754}  // Center the map on Chicago, USA.
        });

        poly = new google.maps.Polyline({
          strokeColor: '#000000',
          strokeOpacity: 1.0,
          strokeWeight: 5
        });
        poly.setMap(map);

        // Add a listener for the click event
        map.addListener('click', addLatLng);

      }

      // Handles click events on a map, and adds a new point to the Polyline.
      function addLatLng(event) {

         path = poly.getPath();

        // Because path is an MVCArray, we can simply append a new coordinate
        // and it will automatically appear.
        path.push(event.latLng);
        contentString="";
        json=[];
        var longitud = google.maps.geometry.spherical.computeLength(path.getArray())/1000;
        if(longitud>10){
          path.pop();
          alert('No se permite mas de 10km');
        }else{
          // Iterate over the vertices.
          for (var i =0; i < path.getLength(); i++) {
            var xy = path.getAt(i);
            var coordenada = [xy.lat(),xy.lng()];
            json.push(coordenada);
            contentString += '<tr><td>' + xy.lat() + '</td><td>' +   xy.lng() + '</td></tr>';
          }
          $("#coordenadas").html(contentString);

        }



      }
      function removeLine() {
        initMap();

      }
      $('#registro').on('submit', function(e){
        e.preventDefault();
        var array;
        var coordenadaslineas = json;


        var datos = $(this).serializeArray();
        array = {datos,coordenadaslineas};

        $.ajax({
          type: $(this).attr('method'),
          data: array,
          url: $(this).attr('action'),
          dataType: 'json',
          success: function(data){
            console.log(data);
            var resultado = data;
            if(resultado =="Exito"){
              toastr.success('Nuevo sitio agregado')

              setTimeout(function() {
                  window.location.href = "http://localhost/Sargazo/sitio/index";
              },2000);
            }else{
              toastr.warning('Hubo un error intente mas tarde')
            }
          }
        })
     });
    </script>
    <script type="text/javascript"
         src="http://maps.google.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&amp&libraries=geometry&callback=initMap"></script>
