<?php
class Galeria {
  private $IDBlog;
  private $IDFoto;
  private $IDSitio;

  private $db;



    public function __construct() {
      $this->db = Database::connect();

    }
    public function getFotos(){
      $consulta = $this->db->query("SELECT * FROM galeria as ga INNER JOIN foto as fo ON ga.IDFoto = fo.IDFoto where ga.IDBlog = '{$this->getIDSitio()}'; ");
      
      return $consulta->fetch_assoc();
    }

  public function save(){
      try {
        $id_registro = 0;
        $this->db->begin_transaction();
        $stmt = $this->db->prepare("INSERT INTO galeria (IDBlog,IDFoto)
        VALUES(?,?)");
        $stmt->bind_param("ii",$this->IDBlog,$this->IDFoto);
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
     * Get the value of Blog
     *
     * @return mixed
     */
    public function getIDBlog()
    {
        return $this->IDBlog;
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
     * Get the value of Private
     *
     * @return mixed
     */
    public function getPrivate()
    {
        return $this->Private;
    }

    /**
     * Set the value of Private
     *
     * @param mixed Private
     *
     * @return self
     */
    public function setPrivate($Private)
    {
        $this->Private = $Private;

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
     * Get the value of Db
     *
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of Db
     *
     * @param mixed db
     *
     * @return self
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

}
?>
