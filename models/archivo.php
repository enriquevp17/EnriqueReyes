<?php
/**
 *
 */
class Archivo
{
  private $Tmp_name;
  private $Error;
  private $Name;
  private $Type;
  private $Directorio;
  private $Nombre;
  private $Archivo;
  private $Permitidos = array();
  private $Limite;
  private $Size;

  public function getMD5File(){
    $name;
    if($this->getTmp_name()){
      $name=md5_file($this->Tmp_name);
    }else {
      $name="";
    }
    return $name;
  }
  public function newDirectory(){

    if(!is_dir($this->getDirectorio())){
      mkdir($this->getDirectorio(),0755,true);
    }
  }

  public function uploadFile(){

    if($this->Error>0){
      $respuesta = array(
        'estado' => false,
        'msg' => "Faltan archivos por seleccionar"
      );
      return $respuesta;
		} else {
		if(in_array($this->Type, $this->getPermitidos()) && $this->Size <= $this->getLimite()){

      $array = explode(".", $this->Name);
      $extension = end($array);

			$archivo = $this->getDirectorio().$this->getMD5File().".".$extension;
      $nombrearchivo=$this->getMD5File().".".$extension;
			if(!file_exists($archivo)){

				$resultado = @move_uploaded_file($this->Tmp_name, $archivo);

				if($resultado){
          $respuesta = array(
            'estado' => true,
            'msg' => "Archivo Guardado",
            'nombre'=> $nombrearchivo
          );

          return $respuesta;
					} else {
            $respuesta = array(
              'estado' => false,
              'msg' => "Error al guardar archivo"
            );
          return $respuesta;
				}

				} else {
          $respuesta = array(
            'estado' => false,
            'msg' => "Archivo ya existe",
            'nombre'=> $nombrearchivo

          );

          return $respuesta;
			}

			} else {
        $respuesta = array(
          'estado' => false,
          'msg' => "Archivo no permitido o excede el tamaño"
        );

        return $respuesta;
		}

	}
  }
  public function deleteFile(){

    if (is_dir($this->getDirectorio()))
    {
        unlink($this->getDirectorio().$this->Nombre);
        return true;
    }
    else
    {
      return false;
    }
  }
    /**
     * Get the value of Archivos
     *
     * @return mixed
     */
    public function getTmp_name()
    {
        return $this->Tmp_name;
    }

    /**
     * Set the value of Archivos
     *
     * @param mixed archivos
     *
     * @return self
     */
    public function setTmp_name($nombre)
    {
        $this->Tmp_name = $nombre;

        return $this;
    }


    /**
     * Get the value of Directorio
     *
     * @return mixed
     */
    public function getDirectorio()
    {
        return $this->Directorio;
    }

    /**
     * Set the value of Directorio
     *
     * @param mixed Directorio
     *
     * @return self
     */
    public function setDirectorio($Directorio)
    {
        $this->Directorio = $Directorio;

        return $this;
    }

    /**
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @param mixed Nombre
     *
     * @return self
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;

        return $this;
    }




    /**
     * Get the value of Archivos
     *
     * @return mixed
     */
    public function getArchivo()
    {
        return $this->Archivo;
    }

    /**
     * Set the value of Archivos
     *
     * @param mixed Archivos
     *
     * @return self
     */
    public function setArchivo($Archivo)
    {
        $this->Archivo = $Archivo;

        return $this;
    }

    /**
     * Get the value of Permitidos
     *
     * @return mixed
     */
    public function getPermitidos()
    {
        return $this->Permitidos;
    }

    /**
     * Set the value of Permitidos
     *
     * @param mixed Permitidos
     *
     * @return self
     */
    public function setPermitidos($Permitidos)
    {
        $this->Permitidos = $Permitidos;

        return $this;
    }

    /**
     * Get the value of Limite
     *
     * @return mixed
     */
    public function getLimite()
    {
        return $this->Limite;
    }

    /**
     * Set the value of Limite
     *
     * @param mixed Limite
     *
     * @return self
     */
    public function setLimite($Limite)
    {
        $this->Limite = $Limite;

        return $this;
    }


    /**
     * Get the value of Tmp Name
     *
     * @return mixed
     */
    public function getTmpName()
    {
        return $this->Tmp_name;
    }

    /**
     * Set the value of Tmp Name
     *
     * @param mixed Tmp_name
     *
     * @return self
     */
    public function setTmpName($Tmp_name)
    {
        $this->Tmp_name = $Tmp_name;

        return $this;
    }

    /**
     * Get the value of Error
     *
     * @return mixed
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * Set the value of Error
     *
     * @param mixed Error
     *
     * @return self
     */
    public function setError($Error)
    {
        $this->Error = $Error;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed Name
     *
     * @return self
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }


    /**
     * Get the value of Size
     *
     * @return mixed
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * Set the value of Size
     *
     * @param mixed Size
     *
     * @return self
     */
    public function setSize($Size)
    {
        $this->Size = $Size;

        return $this;
    }


    /**
     * Get the value of Type
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set the value of Type
     *
     * @param mixed Type
     *
     * @return self
     */
    public function setType($Type)
    {
        $this->Type = $Type;

        return $this;
    }

}



 ?>
