<?php

    if($_POST){
        $apellido = $_POST['apellido'];
        echo "Saludos ".$apellido;
        $nombre = $_POST['nombre'];
        echo "Tu nombre es: ". $nombre . "?";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo 1</title>
</head>
<body>
    <form action="" method="post">
        <label>Nombre: </label>
        <input type="text" name="nombre" id="">
        <br/>
        <label>Apellido </label>
        <input type="text" name="apellido" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>