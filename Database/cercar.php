<?php
include 'conexio.php';

$barat = intval($_POST['barat']);
$car = intval($_POST['car']);


if (isset($car) && isset($barat)) {
    $SQL = "SELECT *  FROM Vehicle where preu < $barat AND preu > $car";

} elseif (isset($car)) {
    $SQL = "SELECT * FROM Vehicle where  preu > $car";

} elseif (isset($barat)) {
    $SQL = "SELECT * FROM Vehicle where preu < $barat ";

}
$ejecutar = $mysqli->query($SQL);



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

    <table width="70%" border="1px">

    <tr>
        <td>ID</td>
        <td>Matricula</td>
        <td>Marca </td>
        <td>Model</td>
        <td>Color</td>
        <td>Combustible</td>
        <td>Any Matricula</td>
        <td>Preu</td>
    </tr>
    <?php
    $count = 0;
        while($dades=$ejecutar->fetch_array()){
        $count++;
        ?>
            <tr>
                <td><?php echo $dades["Id"]?></td>
                <td><?php echo $dades["matricula"]?></td>
                <td><?php echo $dades["marca"]?></td>
                <td><?php echo $dades["model"]?></td>
                <td><?php echo $dades["color"]?></td>
                <td><?php echo $dades["combustible"]?></td>
                <td><?php echo $dades["any_matricula"]?></td>
                <td><?php echo $dades["preu"]?></td>
            </tr>
            <?php   
        }

     ?>
    </table>

</body>
</html>

<?php

echo 'El total de registres es ' . $count;

?>