<?php
class pasajeros{
    private $nombre;
    private $apellido;
    private $dni;
    private $telefono;

    public function __construct($nom,$ape,$dni,$tel)
    {
        $this->nombre=$nom;
        $this->apellido=$ape;
        $this->dni=$dni;
    
        $this->telefono=$tel;
    }

    //---------------------------------Get
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getDni(){
        return $this->dni;
    }

    public function getTel(){
        return $this->telefono;
    }

    //---------------------------------Set
    public function setNombre ($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }
    public function setApellido($nuevoApellido){
        $this->apellido=$nuevoApellido;
    }
    public function setDni($nuevoDni){
        $this->dni=$nuevoDni;
    }

    public function setTel($tel){
        $this->telefono=$tel;
    }

//------------------------------------ToString
public function __toString()
{
    $salida= "Nombre y apellido: ". $this->getNombre()." ". $this->getApellido()."\nDNI: ". $this->getDni()."\nTel: ". $this->getTel()."\n";
    return $salida;
}
}