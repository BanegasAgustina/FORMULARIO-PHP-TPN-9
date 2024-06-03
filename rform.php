<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuestas</title>
    <link rel="stylesheet" href="f.css">
</head>
<body>
<div class="container">
    <h1>Respuestas del formulario:</h1>
<?php
$nombre = $_POST['nombre'];

$apellido =$_POST['apellido'];

$edad = $_POST['edad'];

$dni = $_POST['dni'];

$fecha = $_POST['fechaNacimiento'];

$genero =$_POST['genero'];

$nacio =$_POST['lugarNacimiento'];

$direc = $_POST['direccion'];

$hobb = $_POST['intereses'];

$coment = $_POST['comentarios'];
echo " 
Nombre completo: $nombre , $apellido<br><br>
Edad: $edad  <br><br>
DNI: $dni <br><br>
Fecha de Nacimiento: $fecha <br><br>
Lugar de Nacimiento: $nacio <br><br>
Genero: $genero <br><br>
Direccion: $direc <br><br>
Intereses y/o Hobbies:$hobb <br><br>
Comentarios: $coment <br> <br>
Si sus respuestas estan bien ya estas suscripto ¡bienvenido!"
?>
</div>
</body>
</html>