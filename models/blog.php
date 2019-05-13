<?php
class Blog {
  private $IDBlog;
  private $TituloCorto;
  private $TituloLargo;
  private $Contenido;
  private $Estado;
  private $IDSitio;
  private $Edicion;


  public function __construct() {
    $this->db = Database::connect();
    $this->Estado = 0;
  }

public function getBlogs(){
  $consulta = $this->db->query("SELECT * FROM blog WHERE IDSitio = '{$this->getIDSitio()}';; ");
  return $consulta;
}
  public function save(){
      try {
        $id_registro = 0;
        $this->db->begin_transaction();
        $stmt = $this->db->prepare("INSERT INTO blog (TituloCorto,TituloLargo,Contenido,Estado,IDSitio)
        VALUES(?,?,?,?,?)");
        $stmt->bind_param("sssii",$this->TituloCorto,$this->TituloLargo,$this->Contenido,$this->Estado,$this->IDSitio);
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
     * Set the value of Blog
     *
     * @param mixed IDBlog
     *
     * @return self
     */
    public function setIDBlog($IDBlog)
    {
        $this->IDBlog = $IDBlog;

        return $this;
    }

    /**
     * Set the value of Contenido
     *
     * @param mixed Contenido
     *
     * @return self
     */
    public function setContenido($Contenido)
    {
        $this->Contenido = $Contenido;

        return $this;
    }

    /**
     * Set the value of Estado
     *
     * @param mixed Estado
     *
     * @return self
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;

        return $this;
    }

    /**
     * Set the value of Sitio
     *
     * @param mixed IDSitio
     *
     * @return self
     */
    public function setIDSitio($IDSitio)
    {
        $this->IDSitio = $IDSitio;

        return $this;
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


    /**
     * Get the value of Blog
     *
     * @return mixed
     */
    public function getIDBlog()
    {
        return $this->IDBlog;
    }

    /**
     * Get the value of Contenido
     *
     * @return mixed
     */
    public function getContenido()
    {
        return $this->Contenido;
    }

    /**
     * Get the value of Estado
     *
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * Get the value of Sitio
     *
     * @return mixed
     */
    public function getIDSitio()
    {
        return $this->IDSitio;
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
     * Get the value of Titulo Corto
     *
     * @return mixed
     */
    public function getTituloCorto()
    {
        return $this->TituloCorto;
    }

    /**
     * Set the value of Titulo Corto
     *
     * @param mixed TituloCorto
     *
     * @return self
     */
    public function setTituloCorto($TituloCorto)
    {
        $this->TituloCorto = $TituloCorto;

        return $this;
    }

    /**
     * Get the value of Titulo Largo
     *
     * @return mixed
     */
    public function getTituloLargo()
    {
        return $this->TituloLargo;
    }

    /**
     * Set the value of Titulo Largo
     *
     * @param mixed TituloLargo
     *
     * @return self
     */
    public function setTituloLargo($TituloLargo)
    {
        $this->TituloLargo = $TituloLargo;

        return $this;
    }

}
?>
