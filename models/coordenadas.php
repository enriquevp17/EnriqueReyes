<?php
class Coordenada {
  private $IDCoordenada;
  private $arrayCoordenas;
  private $IDSitio;
  private $Edicion;

  private $db;


  public function __construct() {
		$this->db = Database::connect();

	}
  public function save(){
    try {

      $this->db->begin_transaction();
      $count = count($this->arrayCoordenas);

      for($i = 0; $i<= $count-1;$i++){
  
        $stmt = $this->db->prepare("INSERT INTO coordenadas (Latitud,Longitud,IDSitio)
        VALUES(?,?,?)");

        $stmt->bind_param("ssi",$this->arrayCoordenas[$i][0],$this->arrayCoordenas[$i][1],$this->IDSitio);
        $save= $stmt->execute();

        if($save){
          $result = true;
        }else{
          $result=false;
          break;
        }
      }
      if($result){
          $this->db->commit();
      }else{
        $this->db->rollback();
      }



      return $result;
    } catch (\Exception $e) {
      echo $e->getMessage();
    }
  }
    /**
     * Get the value of Coordenada
     *
     * @return mixed
     */
    public function getIDCoordenada()
    {
        return $this->IDCoordenada;
    }

    /**
     * Set the value of Coordenada
     *
     * @param mixed IDCoordenada
     *
     * @return self
     */
    public function setIDCoordenada($IDCoordenada)
    {
        $this->IDCoordenada = $IDCoordenada;

        return $this;
    }

    /**
     * Get the value of Array Coordenas
     *
     * @return mixed
     */
    public function getArrayCoordenas()
    {
        return $this->arrayCoordenas;
    }

    /**
     * Set the value of Array Coordenas
     *
     * @param mixed arrayCoordenas
     *
     * @return self
     */
    public function setArrayCoordenas($arrayCoordenas)
    {
        $this->arrayCoordenas = $arrayCoordenas;

        return $this;
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
