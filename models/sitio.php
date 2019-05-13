<?php
class Sitio {
  private $IDSitio;
  private $NombreDescriptivo;
  private $NivelAfectacion;
  private $EstadoSitio;
  private $FechaCreacion;
  private $FechaActualizacion;
  private $Edicion;

  private $db;


  public function __construct() {
		$this->db = Database::connect();
    $this->EstadoSitio = 0;
	}

  public function save(){
  		try {
        $id_registro = 0;
  			$this->db->begin_transaction();
        $stmt = $this->db->prepare("INSERT INTO sitio (NombreDescriptivo,NivelAfectacion,EstadoSitio)
        VALUES(?,?,?)");
        $stmt->bind_param("sss",$this->NombreDescriptivo,$this->NivelAfectacion,$this->EstadoSitio);
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
     * Get the value of Sitio
     *
     * @return mixed
     */
    public function getIDSitio()
    {
        return $this->IDSitio;
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
     * Get the value of Nombre Descriptivo
     *
     * @return mixed
     */
    public function getNombreDescriptivo()
    {
        return $this->NombreDescriptivo;
    }

    /**
     * Set the value of Nombre Descriptivo
     *
     * @param mixed NombreDescriptivo
     *
     * @return self
     */
    public function setNombreDescriptivo($NombreDescriptivo)
    {
        $this->NombreDescriptivo = $NombreDescriptivo;

        return $this;
    }

    /**
     * Get the value of Nivel Afectacion
     *
     * @return mixed
     */
    public function getNivelAfectacion()
    {
        return $this->NivelAfectacion;
    }

    /**
     * Set the value of Nivel Afectacion
     *
     * @param mixed NivelAfectacion
     *
     * @return self
     */
    public function setNivelAfectacion($NivelAfectacion)
    {
        $this->NivelAfectacion = $NivelAfectacion;

        return $this;
    }

    /**
     * Get the value of Estado Sitio
     *
     * @return mixed
     */
    public function getEstadoSitio()
    {
        return $this->EstadoSitio;
    }

    /**
     * Set the value of Estado Sitio
     *
     * @param mixed EstadoSitio
     *
     * @return self
     */
    public function setEstadoSitio($EstadoSitio)
    {
        $this->EstadoSitio = $EstadoSitio;

        return $this;
    }

    /**
     * Get the value of Fecha Creacion
     *
     * @return mixed
     */
    public function getFechaCreacion()
    {
        return $this->FechaCreacion;
    }

    /**
     * Set the value of Fecha Creacion
     *
     * @param mixed FechaCreacion
     *
     * @return self
     */
    public function setFechaCreacion($FechaCreacion)
    {
        $this->FechaCreacion = $FechaCreacion;

        return $this;
    }

    /**
     * Get the value of Fecha Actualizacion
     *
     * @return mixed
     */
    public function getFechaActualizacion()
    {
        return $this->FechaActualizacion;
    }

    /**
     * Set the value of Fecha Actualizacion
     *
     * @param mixed FechaActualizacion
     *
     * @return self
     */
    public function setFechaActualizacion($FechaActualizacion)
    {
        $this->FechaActualizacion = $FechaActualizacion;

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
  public function getAllSitios(){
        $consulta = $this->db->query("SELECT * FROM `sitio`; ");
    		return $consulta;
    }
    public function getSitio(){
          $consulta = $this->db->query("SELECT * FROM `sitio` WHERE IDSitio = '{$this->getIDSitio()}'; ");
          return $consulta->fetch_assoc();
      }
}
?>
