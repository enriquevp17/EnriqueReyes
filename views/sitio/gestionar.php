
<main class="ttr-wrapper">
  <div class="container-fluid">
    <div class="db-breadcrumb">
      <h4 class="breadcrumb-title"><?php echo $sitio['NombreDescriptivo'] ?></h4>
      <ul class="db-breadcrumb-list">
        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
        <li><?php echo $sitio['NombreDescriptivo'] ?></li>
      </ul>
    </div>
    <div class="row">
      <!-- Your Profile Views Chart -->
      <div class="col-lg-12 m-b30">
        <div class="widget-box">
          <h1><?php echo $sitio['NombreDescriptivo']; ?></h1>

          <div class="widget-inner">

            <div class="row">
                  <div class="col-xs-12">
                    <nav>
                      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Blogs</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Eventos</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Ubicacion</a>
                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Informacion general</a>
                      </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="widget-box">
                          <div class="wc-title">
                          <center><button type="button" class="btn btn-success"><a href="<?=base_url?>blog/crear&nombre=<?php echo $sitio['NombreDescriptivo']; ?>&id=<?php echo $sitio['IDSitio']; ?>">Agregar blog</a> </button></center>
                          </div>

                          <div class="widget-inner">
                            <?php while($blog = $blogs->fetch_assoc()){ ?>
                            <div class="card-courses-list admin-courses">
                              <div class="card-courses-media">
                                <img src="<?=base_url?>uploads/13/<?php echo $fotos['RutaFoto']; ?>" alt=""/>

                              </div>
                              <div class="card-courses-full-dec">
                                <div class="card-courses-title">
                                  <h4></h4>
                                </div>
                                <div class="card-courses-list-bx">
                                  <ul class="card-courses-view">
                                
                                    <li class="card-courses-stats">
                                      <a href="#" class="btn button-sm green radius-xl"></a>
                                    </li>

                                  </ul>
                                </div>
                                <div class="row card-courses-dec">
                                  <div class="col-md-12">
                                    <h6 class="m-b10"><?php echo $blog['TituloCorto']; ?></h6>
                                    <p><?php echo $blog['Contenido']; ?></p>
                                  </div>
                                  <div class="col-md-12">
                                    <a href="#" class="btn green radius-xl outline"></a>
                                    <a href="" class="btn black radius-xl outline">Editar</a>
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
                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                      </div>
                      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                      </div>
                      <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                      </div>
                    </div>

                  </div>
                </div>
                    <button type="button" class="btn"> <a href="<?=base_url?>sitio/index">Cancelar</a> </button>
          </div>
        </div>
      </div>
      <!-- Your Profile Views Chart END-->
    </div>
  </div>
</main>
