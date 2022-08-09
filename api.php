<?php
$cedula = $_POST['cedula'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha = $_POST['fecha'];
$email = $_POST['email'];
$pais = $_POST['pais'];
$departamento = $_POST['departamento'];
$ciudad = $_POST['ciudad'];
$barrio = $_POST['barrio'];
$direccion = $_POST['direccion'];

echo "Hola, soy $nombres $apellidos identificado con cédula de ciudadanía $cedula, mi fecha de nacimiento es $fecha y soy de $pais , $departamento, $ciudad, con correo electronico $email, localizado en el barrio $barrio en la dirrecion $direccion";
?>