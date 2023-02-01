<?php
include 'conexio.php';

$matricula = $_POST['matricula'];


$SQL = "DELETE from Vehicle where matricula = '$matricula'";
$ejecutar = $mysqli->query($SQL);

echo "Se han eliminat un total de " . $mysqli->affected_rows . " columnes.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<BR>
<BR>
<a href="http://localhost/M07UF3/Database/altas.html">DONAR ALTA</a>
    
</body>
</html>
