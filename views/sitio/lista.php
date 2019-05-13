<main class="ttr-wrapper">
  <div class="container-fluid">
    <div class="db-breadcrumb">
      <h4 class="breadcrumb-title">Sitios</h4>
      <ul class="db-breadcrumb-list">
        <li><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
        <li>Sitios</li>
      </ul>
    </div>
    <div class="row">
      <!-- Your Profile Views Chart -->


      <div class="col-lg-12 m-b30">

          <div class="form-group">
              <center><button type="button" class="btn btn-success"><a href="<?=base_url?>sitio/crear">Agregar área</a> </button></center>
          </div>


        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Ingrese el nombre del sitio" aria-label="Recipient's username" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
          </div>
        </div>

        <div class="widget-box">
          <div class="wc-title">
            <h4>Sitios registrados</h4>
          </div>
          <div class="widget-inner">

            <?php while($sitio = $this->sitios->fetch_assoc()){ ?>
            <div class="card-courses-list admin-courses">
              <div class="card-courses-media">
                <div id="mapa<?php echo $sitio['IDSitio']; ?>" style="height:250px;">

                </div>

              </div>
              <div class="card-courses-full-dec">
                <div class="card-courses-title">
                  <h4><?php echo $sitio['NombreDescriptivo']; ?></h4>
                </div>
                <div class="card-courses-list-bx">
                  <ul class="card-courses-view">
                    <li class="card-courses-user">
                      <div class="card-courses-user-pic">
                        <img src="<?=base_url?>assets/images/testimonials/pic3.jpg" alt=""/>
                      </div>

                    </li>
                    <li class="card-courses-categories">
                      <h5>Nivel de afectación</h5>
                      <h4><?php echo  $sitio['NivelAfectacion'] ?></h4>
                    </li>
                    <li class="card-courses-stats">
                      <a href="#" class="btn button-sm green radius-xl"><?php echo  $sitio['EstadoSitio'] ?></a>
                    </li>

                  </ul>
                </div>
                <div class="row card-courses-dec">
                  <div class="col-md-12">
                    <h6 class="m-b10">Descripción</h6>
                    <p>Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus referrentur, usu debet tamquam et. Sea ut nullam aperiam, mei cu tollit salutatus delicatissimi. </p>
                  </div>
                  <div class="col-md-12">
                    <a href="#" class="btn green radius-xl outline"><?php if($sitio['EstadoSitio'] == 0 ){ echo "Habilitar";}else {
                      echo "Deshabilitar";
                    } ?></a>
                    <a href="<?=base_url?>sitio/editar&id=<?php echo $sitio['IDSitio']; ?>" class="btn black radius-xl outline">Editar</a>
                  </div>
                </div>

              </div>
            </div>
          <?php } ?>
            <div class="col-lg-12 m-b20">
              <div class="pagination-bx rounded-sm gray clearfix">
                <ul class="pagination">
                  <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Your Profile Views Chart END-->
    </div>
  </div>
</main>
<script type="text/javascript">

    var map;
    var map2;
    function initMap() {
      map = new google.maps.Map(document.getElementById('mapa11'), {
        center: {lat: 43.5293101, lng: -5.6773233},
        zoom: 13
      });
      map2 = new google.maps.Map(document.getElementById('mapa12'), {
        center: {lat: 43.5293101, lng: -5.6773233},
        zoom: 13
      });
    }

</script>
<script type="text/javascript"
     src="http://maps.google.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&amp&libraries=geometry&callback=initMap"></script>
