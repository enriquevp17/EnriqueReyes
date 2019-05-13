<?php
class Foto {
  private $IDFoto;
  private $RutaFoto;
  private $Edicion;

private $db;



  public function __construct() {
    $this->db = Database::connect();

  }
  public function save(){
      try {
        $id_registro = 0;
        $this->db->begin_transaction();
        $stmt = $this->db->prepare("INSERT INTO foto (RutaFoto)
        VALUES(?)");
        $stmt->bind_param("s",$this->RutaFoto);
        $save= $stmt->execute();
        $result = false;
        if($save){
          $result = true;
            $id_registro=$this->db->insert_id;
          $this->db->commit();
        }else{
          $result = false;
          $this->db->rollback();
        }

        $respuesta=array(
          'result' =>$result,
          'id'=> $id_registro
        );
        return $respuesta;
      } catch (\Exception $e) {
        echo $e->getMessage();
      }
    }
    /**
     * Get the value of Foto
     *
     * @return mixed
     */
    public function getIDFoto()
    {
        return $this->IDFoto;
    }

    /**
     * Set the value of Foto
     *
     * @param mixed IDFoto
     *
     * @return self
     */
    public function setIDFoto($IDFoto)
    {
        $this->IDFoto = $IDFoto;

        return $this;
    }

    /**
     * Get the value of Ruta Foto
     *
     * @return mixed
     */
    public function getRutaFoto()
    {
        return $this->RutaFoto;
    }

    /**
     * Set the value of Ruta Foto
     *
     * @param mixed RutaFoto
     *
     * @return self
     */
    public function setRutaFoto($RutaFoto)
    {
        $this->RutaFoto = $RutaFoto;

        return $this;
    }

    /**
     * Get the value of Edicion
     *
     * @return mixed
     */
    public function getEdicion()
    {
        return $this->Edicion;
    }

    /**
     * Set the value of Edicion
     *
     * @param mixed Edicion
     *
     * @return self
     */
    public function setEdicion($Edicion)
    {
        $this->Edicion = $Edicion;

        return $this;
    }

}
?>
