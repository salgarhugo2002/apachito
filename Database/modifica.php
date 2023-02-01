<?php
include 'conexio.php';



$matricula = $_POST['matricula'];
$preu = $_POST['preu'];
$SQL = "UPDATE Vehicle set preu = '$preu' where matricula = '$matricula'";
$ejecutar = $mysqli->query($SQL);

echo "Se han modificat un total de " . $mysqli->affected_rows . " columnes.";
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

<br>
<a href="http://localhost/M07UF3/Database/altas.html">DONAR ALTA</a><br>
<a href="http://localhost/M07UF3/Database/baixa.html">DONAR BAIXA</a><br>
<a href="http://localhost/M07UF3/Database/cercar.html">CERCAR</a><br>
<a href="http://localhost/M07UF3/Database/modifica.html">MODIFICAR</a><br>
    
</body>
</html>