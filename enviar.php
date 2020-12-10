<?php

if (isset($_POST['enviar'])){

    $nombre=$_POST["nombre"];
    $telefono=$_POST["telefono"];
    $email=$_POST["email"];
    $mensaje=$_POST["mensaje"];

    $campos=array();

    if($nombre == ""){
        array_push($campos, "El campo nombre no debe estar vacio");
    }
    if($telefono == "" || strlen($telefono) < 6){
        array_push($campos,"El campo telefono no debe estar vacio y ni tener menos de 6 numeros");
    }
    if($email == "" || strpos($email,"@") === false){
        array_push($campos,"Digite un correo electronico valido ");
    }
    if($email == ""){
        array_push($campos,"El campo mensaje debe tener el mensaje que desea enviar");
    }
    if(count($campos) > 0 ){
        echo("Hay un error");
        for($i = 0; $i<count($campos);$i++){
            echo("Debe diligenciarlo".$campos[$i]);
        }
    }
    else{
        echo("Es correcto");
    }

}


$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];
$mensaje=$_POST["mensaje"];


$header = 'From: '.$email."\r\n";
$header .="X-Mailer : PHP/" . phpversion(). "\r\n";
$header .="Mime-Version: 7.2 \r\n";
$header .="Content-Type: text/plain";

$mensaje="Este mensaje fue enviado por ".$nombre ."\r\n";
$mensaje .="Su e-mail es: ".$email."\r\n";
$mensaje .="Mensaje: " .$_POST["mensaje"]."\r\n";
$mensaje .="Enviado el ".date("d/m/y",time());


// Poner el correo electronico de a quien se le quiere enviar los datos

$para = "gilsebastian505@gmail.com";
$asunto = "Asunto del mensaje recibido ";

@mail($para,$asunto,utf8_decode($mensaje),$header);

echo("Datos recibidos con exito");




?>