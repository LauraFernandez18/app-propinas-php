<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Calcular propinas</title>
</head>

<body>
    <div class="formulario">
        <h1>Calculador de propinas</h1><br>
    <form action="./process/calculo.proc.php" method="post">
        <input type="number" name="cuenta" placeholder="Total de la cuenta..."><br><br>
        <select name="servicio">
            <option value="0.3">30% excelente</option>
            <option value="0.2">20% Bueno</option>
            <option value="0.1">10% Normal</option>
            <option value="0.05">5% Mala</option>
        </select><br><br>
        <input type="num" name="personas" placeholder="¿Cuántas personas van a pagar?"/><br><br>
        <input type="submit" value="Calcular" name="submit" class="btn btn-light btn_calcular">
    </form>
    <?php
    if(isset($_REQUEST['nan'])){
        echo "<br>";
        echo "<p>total a pagar</p>";
        echo "<h3>".$_REQUEST['res']." por persona</h3>";
    }
    ?>
    </div>
</body>

</html>