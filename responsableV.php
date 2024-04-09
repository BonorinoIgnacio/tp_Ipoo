<?php
class responsableV{

    private $NEmpleado;
    private $NLicencia;
    private $nombre;
    private $apellido;
    
    public function __construct($nEmpleado,$nLicencia,$nombre,$apellido)
    {
        $this->NEmpleado=$nEmpleado;
        $this->NLicencia=$nLicencia;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }
    //--------------------------------------Get

    public function getNumEmpleado(){
        return $this->NEmpleado;
    }
    public function getNumLicencia(){
        return $this->NLicencia;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }

    //--------------------------------------Set


    
    //--------------------------------------toString

    public function __toString()
    {
        return $this->getNombre()." ". $this->getApellido()."\nN° empleado: ". $this->getNumEmpleado()."\nN° licencia: ". $this->getNumLicencia()."\n"; 
    }

}