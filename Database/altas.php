<?php
include 'conexio.php';

$SQL = "CREATE TABLE IF NOT EXISTS Vehicle (
    Id int(255) primary key AUTO_INCREMENT,
    matricula varchar(8) ,
    marca varchar(255) ,
    model varchar(8),
    color varchar(255),
    combustible varchar(15),
    any_matricula int(4),
    preu int(10)
    )";
    
$ejecutar = $mysqli->query($SQL);
    $matricula = $_POST['matricula'];
    $marca = $_POST['marca'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $combustible = $_POST['combustible'];
    $anymatricula = intval($_POST['anymatricula']);
    $preu = intval($_POST['preu']);

    $SQL = " INSERT INTO Vehicle(matricula,marca,model,color,combustible,any_matricula,preu)
            values
            ('$matricula','$marca','$model','$color','$combustible','$anymatricula','$preu')";

    $ejecutar = $mysqli->query($SQL);

    include('altas.html');


   

?>