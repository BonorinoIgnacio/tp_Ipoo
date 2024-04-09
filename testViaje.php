<?php 
include_once "viaje.php";
include_once "pasajeros.php";
include_once "responsableV.php";
    echo "\ningrese los datos del responsable del viaje\n\nNombre: ";
    $nombreR= trim(fgets(STDIN));
    echo "Apellido: ";
    $apellidoR=trim(fgets(STDIN));
    echo "Numero de licencia: ";
    $numLicencia=trim(fgets(STDIN));
    echo "Numero de empleado: ";
    $numEmpleado=trim(fgets(STDIN));

    $objResponsableViaje=new responsableV($numEmpleado,$numLicencia,$nombreR,$apellidoR);

    $arrayPasajeros=[];// inicializa el arreglo vacio (para evitar errores a la hora de pasarlo como parametro)
    // $objPasajeroNombre = $objPasajero->getNombre();
    $objViaje = new viaje(488,"CABA",250,$arrayPasajeros,$objResponsableViaje);
    echo "\n".$objViaje;
    echo"\nDesea modificar algun dato? (si/no)\n";
    $modificarDatos=trim(fgets(STDIN));
    do {
    if($modificarDatos==="si"){
        echo "(codigo, destino, cantidad maxima de pasajeros (cm)) ";
        $dato= trim(fgets(STDIN));
        switch($dato){
            case "codigo":
                echo "ingrese el nuevo codigo\n";
                $modificar=trim(fgets(STDIN));
                $objViaje->setCodigo($modificar);
                break;
            case "destino":
                echo "ingrese el nuevo destino\n";
                $modificar=trim(fgets(STDIN));
                $objViaje->setDestino($modificar);
                break;
            case "cm":
                echo "ingrese la nueva cantidad maxima\n";
                $modificar=trim(fgets(STDIN));
                $objViaje->setCantMax($modificar);
                break;
            // case "c":
            //     echo "ingrese la cantidad de pasajeros";
            //     $modificar=trim(fgets(STDIN));
            //     $objViaje->setPasajeros($modificar);
            //     break;
            default:
            echo "Dato invalido\n";
                break;
        }
    }  
    echo "Desea modificar otro dato del viaje? (si/no)\n";
    $modificarDatos=trim(fgets(STDIN));
    } while ($modificarDatos=="si");
    //echo $objViaje;
    $i=0;
   
    do {
        $i++;//corta la repetitiva principal
        echo "desea agregar un pasajero al viaje? (si/no )";
        $agregarPasajero=trim(fgets(STDIN));
        if ($agregarPasajero=="si") {

            echo "Ingrese el nombre del pasajero\n";
            $nombre=trim(fgets(STDIN));
            echo "Ingrese el apellido\n";
            $apellido=trim(fgets(STDIN));
            echo "Ingrese el DNI\n";
            $dni=trim(fgets(STDIN));
            echo "Ingrese el numero de telefono\n";
            $tel=trim(fgets(STDIN));

           


            $pasajero= new pasajeros($nombre,$apellido,$dni,$tel);
            $arrayPasajeros[]=
            array(
            "nombre"=>$pasajero->getNombre(),
             "apellido"=>$pasajero->getApellido(), 
             "dni"=>$pasajero->getDni(),
             "tel"=>$pasajero->getTel()
             );

            $indice=0;//corta repetitiva anidada
            $salida=false;//corta repetitiva anidada
            $entraDni=0;
            do {    
              $arregloDni=$arrayPasajeros[$indice]["dni"];
              if($arregloDni==$dni){
                  $entraDni++;
                  if($entraDni>=2){// corrobora que el dni este dos veces en el arreglo 
                    $salida=true;
                    array_pop($arrayPasajeros);// elimina el segundo dni del arreglo
                    echo "Este pasajero ya esta incluido en el vuelo\n";
                    }
                }
                $indice++;
                } while ($salida==false && count($arrayPasajeros)>$indice);





             
        }
    } while ($agregarPasajero == "si" && $objViaje->getCantMax()>$i);    
    
    echo $objViaje = new viaje(488,"CABA",250,$arrayPasajeros,$objResponsableViaje);
    print_r($arrayPasajeros);









