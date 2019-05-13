<?php

require_once 'models/blog.php';
require_once 'models/archivo.php';
require_once 'models/foto.php';
require_once 'models/galeria.php';
class blogController{


  private $model;



  public function __CONSTRUCT(){
    $this->model = new Blog();

  }



  public function crear(){
    $nombre = $_GET['nombre'];
    $id =  $_GET['id'];
    require_once('views/share/head.php');
     require_once('views/share/encabezado.php');
    require_once('views/share/aside.php');
    require_once('views/blog/crear.php');
   require_once('views/share/footer.php');
  }
  public function editar(){

    $id_sitio = $_GET['id'];
    $this->model->setIDSitio($id_sitio);
    $sitio = $this->model->getSitio();
    require_once('views/share/head.php');
     require_once('views/share/encabezado.php');
    require_once('views/share/aside.php');
    require_once('views/sitio/editar.php');
   require_once('views/share/footer.php');
  }

  public function guardar(){



    if(!$_FILES['input-fa']['error'][0]>0){

        $obj_archivo = new Archivo();
        $directorio = "uploads/".$_POST['id_sitio']."/";
        $obj_archivo->setDirectorio($directorio);
        $obj_archivo->newDirectory();
        $permitidos = array("image/gif","image/png","application/pdf","image/jpg","image/jpeg");
        $obj_archivo->setPermitidos($permitidos);
        $obj_archivo->setLimite(1024*1024); //Permitimos un mega

        $nombresArchivos=array();
        //En este caso no es necesario subir archivo obligatoriamente ni el resultado
        $total = count($_FILES['input-fa']['name']);
        for ($i=0; $i < $total  ; $i++) {
          $obj_archivo->setName($_FILES['input-fa']['name'][$i]);
            $obj_archivo->setType($_FILES['input-fa']['type'][$i]);
            $obj_archivo->setTmpName($_FILES['input-fa']['tmp_name'][$i]);
            $obj_archivo->setError($_FILES['input-fa']['error'][$i]);
            $obj_archivo->setSize($_FILES['input-fa']['size'][$i]);

            $respuesta = $obj_archivo->uploadFile();
            if(!($respuesta['msg']=="Archivo ya existe" || $respuesta['msg']=="Archivo Guardado")){

              $_SESSION['subida'] = $respuesta['msg'];
              $ruta = base_url."blog/crear&id=".$_POST['id_sitio'];
              header('Location: '.$ruta);

            }else{

              array_push($nombresArchivos,$respuesta['nombre']);
            }

        }

      }


    $this->model->setTituloCorto($_POST['corto']);
    $this->model->setTituloLargo($_POST['largo']);
    $this->model->setContenido($_POST['descripcion']);
    $this->model->setIDSitio($_POST['id_sitio']);

    $save = $this->model->save();
    if($save['result']){
      $obj_foto = new Foto();
      $obj_galeria = new Galeria();
      $obj_galeria->setIDBlog($save['id']);
        //guardamos una foto y luego un registro de galeria
      $totalfotos = count($nombresArchivos);
      for ($i=0; $i < $totalfotos; $i++) {

        $obj_foto->setRutaFoto($nombresArchivos[$i]);
        $guardar = $obj_foto->save();
        //guardamos la galeria
        if($save){
          $obj_galeria->setIDFoto($guardar['id']);
          $obj_galeria->save();

        }else{
          die();
        }


      }

      if($save){
        $ruta = base_url ."sitio/editar&id=".$_POST['id_sitio'];
            header('Location: '.$ruta);
      }else{
        $ruta = base_url ."blog/crear&id=".$_POST['id_sitio'];
            header('Location: '.$ruta);
      }
    }else{
      $ruta = base_url ."blog/crear&id=".$_POST['id_sitio'];
          header('Location: '.$ruta);
    }

  }
}
