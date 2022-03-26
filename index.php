<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarea Proyecto Cilindro</title>
    <link rel="stylesheet" href="css/cirbugsm.css">
    <link rel="icon" href="https://cbtis119.edu.mx/wp/wp-content/uploads/2022/01/Pantera-dgeti-azul.png">
    <style>
        h1 {
            text-align: center;
        }
        
        body {
            background-color: lightpink;
        }
        
        input[id="alt"],
        input[id="diam"] {
            padding: 10px;
            display: block;
            width: 250px;
            border-radius: 2px;
            border: 2px solid rgb(23, 180, 57);
            margin: 30px auto;
        }
        
        fieldset {
            background-color: antiquewhite;
            border: 3px solid navy;
            border-radius: 3px;
            position: absolute;
            left: 30%;
            top: 13%;
        }
        
        label {
            text-align: center;
            color: black;
            font-size: 25px;
            font-weight: bold;
        }
        
        button[type="reset"] {
            background-color: red;
            font-size: 16px;
            cursor: grab;
            font-weight: bold;
            margin: 0px 50px 0px -8px;
            border-radius: 13px;
            color: black;
            font-weight: bold;
            border: 0px;
            padding: 15px;
        }
        
        button[type="reset"]:hover {
            background-color: red;
            font-size: 16px;
            cursor: grab;
            font-weight: bold;
            border-radius: 13px;
            color: rgb(234, 250, 6);
        }
        
        button[type="submit"] {
            background-color: rgb(45, 230, 69);
            font-size: 16px;
            text-align: center;
            cursor: grab;
            font-weight: bold;
            border-radius: 13px;
            color: black;
            border: 0px;
            padding: 15px;
        }
        
        button[type="submit"]:hover {
            background-color: rgb(0, 255, 85);
            font-size: 16px;
            font-weight: bold;
            border-radius: 13px;
            cursor: grab;
            color: rgb(12, 11, 20);
        }
    </style>
</head>

<body>

    <form method="post">

        <h1>Capacidad En Litros De Un Cilindro</h1>
        <fieldset>

            <label for="diam">Introduce El Diametro En Pulgadas</label>
            <input type="number" name="diam" id="diam" required placeholder="Diametro">


            <label for="alt">Introduce La Altura En Pulgadas</label>
            <input type="number" name="alt" id="alt" required placeholder="Altura">

            <div style="text-align: center;">
                <button type="reset">Borrar</button>
                <button value="Calcular" type="submit">Calcular</button>
            </div>
        <?php
        error_reporting(E_ERROR);
        $cirbugsdiam= $_POST["diam"];
        $cirbugsalt= $_POST["alt"];
        $cirbugspi= 3.141593;
        
        $pdiamresult = $cirbugsdiam * 2.54 ;
        echo "<p>Diametro a Centimetros: <b>$pdiamresult</b> ";
        echo "<br>";
        $paltresult = $cirbugsalt * 2.54 ;
        echo "<p>Altura a Centimetros: <b>$paltresult</b>";
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
        </fieldset>

    </form>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
    <a href="https://facebook.com/cirbugs" style="float:left; padding:10px;">Cristian Torres - Cirbugs</a>
    <script language="Javascript">
    document.oncontextmenu = function(){return false}
</script>
</body>

</html>