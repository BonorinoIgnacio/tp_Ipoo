<?php 
class viaje{
    private $codigo;
    private $destino;
    private $canMax;
    private $cantPasajeros;
    private $objPasajeros;//arreglo multidimencional de pasajeros
    private $responsableV;
public function __construct($cod,$destino,$cantMax,$arrayPasajeros,$objResponsableViaje)
{
    $this->codigo=$cod;
    $this->destino=$destino;
    $this->canMax=$cantMax;
    $this->cantPasajeros=count($arrayPasajeros);
    $this->responsableV=$objResponsableViaje;
} 
//------------------------------Get
public function getCodigo(){
    return $this->codigo;
}
public function getDestino (){
    return $this->destino;
}
public function getCantMax(){
    return $this->canMax;
}
public function getCantPasajeros(){
    return $this->cantPasajeros;
}

public function getPasajeros(){
    return $this->objPasajeros;
}
public function getResponsable(){
    return $this->responsableV;
}
//------------------------------Set
public function setCodigo ($cod){
    $this->codigo=$cod;
}
public function setDestino($destino){
    $this->destino=$destino;
}
public function setCantMax($cant){
    $this->canMax=$cant;
}
public function setCantPasajero($cant){
    $this->cantPasajeros=$cant;
}

public function setPasajeros($pasajeros){
    $this->objPasajeros=$pasajeros;
}
//-------------------------------toString
public function __toString()
{
    $salida= "Responsable del viaje: \n". $this->getResponsable().
    "\nDatos del viaje\nCodigo de viaje: ". $this->getCodigo().
    "\n"."Destino: ". $this->getDestino()."\n".
    "Cantidad de pasajeros maxima: ". $this->getCantMax().
    "\n"."Cantidad de pasajeros: ". $this->getCantPasajeros()."\n";
    return $salida;
}
}
