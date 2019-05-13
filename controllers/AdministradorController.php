<?php

/*require_once 'models/usuario.php';
require_once 'models/subdireccion.php';
require_once 'models/departamento.php';*/
class administradorController{



  private $usuarios;
  private $subdirecciones;
  private $departamentos;


  /*public function __CONSTRUCT(){
    $obj_usuario = new Usuario();
    $this->usuarios = $obj_usuario ->getAll();
    $obj_subdireccion = new Subdireccion();
    $this->subdirecciones = $obj_subdireccion ->getAll();
    $obj_departamento = new Departamento();
    $this->departamentos = $obj_departamento ->getAll();
  }*/


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
    require_once('views/dashboard.php');
   require_once('views/share/footer.php');
  //  require_once('views/share/footer.php');

  }
}
