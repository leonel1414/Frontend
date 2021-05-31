<?php
class Usuario
{
    private $nombre;
    private $contrasenia;

    public function __construct()
    {
    }
    public function SetNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function SetContrasenia($contrasenia)
    {
        $this->contrasenia = $contrasenia;
    }

    //get

    public function GetNombre()
    {
        return $this->nombre;
    }

    public function GetContrasenia()
    {
        return $this->contrasenia;
    }
}

?>