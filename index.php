<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Calcular Hipotenusa</title>
</head>

<body>

    <div class="cuerpo">
        <h1>Calcular Hipotenusa</h1> 
        <form class="formulario" action="index.php" method="get">
            <label for="">Cateto 1:</label>
            <input type="text" name="num1" id="" value=3 readonly>
            <label for="">Cateto 2:</label>
            <input type="text" name="num2" id="" value=4 readonly> <br>
            <button type="submit">Calcular</button> <br><a href="./index.php"> Reintentar</a> <br>
           <br> 
            <?php
            if ($_GET) {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                
                //Calculo de la hipotenusa a^2 = b^2 + c^2
                $suma = pow($num1, 2) + pow($num2, 2);
                $resultado = sqrt($suma);
                echo "El valor de la Hipotenusa es " . $resultado;
            }
            ?> <br>
            <br>
<img src="./img/formula.png" alt="">
        </form>

        



    </div>
</body>

</html>