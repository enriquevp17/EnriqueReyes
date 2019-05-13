<?php

require_once 'models/sitio.php';
require_once 'models/coordenadas.php';
require_once 'models/blog.php';

require_once 'models/galeria.php';
class sitioController{


  private $model;
  private $sitios;



  public function __CONSTRUCT(){
    $this->model = new Sitio();
    $this->sitios = $this->model->getAllSitios();

  }


  public function index(){
    Utils::isAdmin();

    //Personal registrado
  /*  $numUsers=count($this->usuarios->fetch_all());
    $numSubs=count($this->subdirecciones->fetch_all());
      $numDeps=count($this->departamentos->fetch_all());*/
    //faltan otros
    require_once('views/share/head.php');
     require_once('views/share/encabezado.php');
    require_once('views/share/aside.php');
    require_once('views/sitio/lista.php');
   require_once('views/share/footer.php');
  //  require_once('views/share/footer.php');

  }
  public function crear(){
    require_once('views/share/head.php');
     require_once('views/share/encabezado.php');
    require_once('views/share/aside.php');
    require_once('views/sitio/crear.php');
   require_once('views/share/footer.php');
  }
  public function editar(){

    $id_sitio = $_GET['id'];
    $this->model->setIDSitio($id_sitio);
    $sitio = $this->model->getSitio();
    $obj_blog = new Blog();
    $obj_blog->setIDSitio($id_sitio);
    $blogs = $obj_blog->getBlogs();


    $obj_galeria=new Galeria();
    $obj_galeria->setIDSitio(9);
    $fotos = $obj_galeria->getFotos();
    require_once('views/share/head.php');
     require_once('views/share/encabezado.php');
    require_once('views/share/aside.php');
    require_once('views/sitio/gestionar.php');
   require_once('views/share/footer.php');
  }

  public function guardar(){


    $this->model->setNivelAfectacion($_POST['datos'][0]['value']);
    $this->model->setNombreDescriptivo($_POST['datos'][1]['value']);

    $save = $this->model->save();
    if($save['result']){
      $coordenada = new Coordenada();
      $coordenada->setIDSitio($save['id']);
      $coordenada->setArrayCoordenas($_POST['coordenadaslineas']);
      $save = $coordenada->save();
      if($save){
        die(json_encode("Exito"));
      }else{
        die(json_encode("Error"));
      }
    }else{
      die(json_encode("Error"));
    }

  }
}
