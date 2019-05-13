<?php
class Personal {
  private $IDPersonal;
  private $Rol;
  private $Nombre;
  private $PrimerApellido;
  private $SegundoApellido;
  private $RutaFoto;
  private $Correo;
  private $Contrseña;
  private $Edicion;

    /**
     * Get the value of Personal
     *
     * @return mixed
     */
    public function getIDPersonal()
    {
        return $this->IDPersonal;
    }

    /**
     * Set the value of Personal
     *
     * @param mixed IDPersonal
     *
     * @return self
     */
    public function setIDPersonal($IDPersonal)
    {
        $this->IDPersonal = $IDPersonal;

        return $this;
    }

    /**
     * Get the value of Rol
     *
     * @return mixed
     */
    public function getRol()
    {
        return $this->Rol;
    }

    /**
     * Set the value of Rol
     *
     * @param mixed Rol
     *
     * @return self
     */
    public function setRol($Rol)
    {
        $this->Rol = $Rol;

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
     * Get the value of Primer Apellido
     *
     * @return mixed
     */
    public function getPrimerApellido()
    {
        return $this->PrimerApellido;
    }

    /**
     * Set the value of Primer Apellido
     *
     * @param mixed PrimerApellido
     *
     * @return self
     */
    public function setPrimerApellido($PrimerApellido)
    {
        $this->PrimerApellido = $PrimerApellido;

        return $this;
    }

    /**
     * Get the value of Segundo Apellido
     *
     * @return mixed
     */
    public function getSegundoApellido()
    {
        return $this->SegundoApellido;
    }

    /**
     * Set the value of Segundo Apellido
     *
     * @param mixed SegundoApellido
     *
     * @return self
     */
    public function setSegundoApellido($SegundoApellido)
    {
        $this->SegundoApellido = $SegundoApellido;

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
     * Get the value of Correo
     *
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->Correo;
    }

    /**
     * Set the value of Correo
     *
     * @param mixed Correo
     *
     * @return self
     */
    public function setCorreo($Correo)
    {
        $this->Correo = $Correo;

        return $this;
    }

    /**
     * Get the value of Contrse
     *
     * @return mixed
     */
    public function getContrse()
    {
        return $this->Contrse;
    }

    /**
     * Set the value of Contrse
     *
     * @param mixed Contrse
     *
     * @return self
     */
    public function setContrse($Contrse)
    {
        $this->Contrse = $Contrse;

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
