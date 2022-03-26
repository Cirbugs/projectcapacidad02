
<?php 

$cirbugsdiam= $_POST["diam"];
$cirbugsalt= $_POST["alt"];
$cirbugspi= 3.141593;

$pdiamresult = $cirbugsdiam * 2.54 ;
echo "<p>Diametro a Centimetros <b>$pdiamresult</b> ";
echo "<br>";

$paltresult = $cirbugsalt * 2.54 ;
echo "<p>Altura A Centimetros <b>$paltresult</b>";
echo "<br>";

$cirbugsradio = $pdiamresult / 2;
echo "<p>El Radio Es De: <b>$cirbugsradio</b>";
echo "<br>";


$cirbugsop3= $cirbugspi * $cirbugsradio * $cirbugsradio * $paltresult;

echo "<p>El Volumen es: <b>$cirbugsop3</b> metros cubicos";
echo "<br>";
$cirbugslitros= $cirbugsop3 / 1000;
echo "<p>Capacidad de litros: <b>$cirbugslitros</b>";


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Litros</title>
    <link rel="icon" href="https://cbtis119.edu.mx/wp/wp-content/uploads/2022/01/Pantera-dgeti-azul.png">
</head>
<body>
<style>
    p{
        text-align: center;
        font-size: 36px;
    }
</style>
    
</body>
</html>