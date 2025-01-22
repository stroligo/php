<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <?php
    $value = 10;
    $rand = rand(0,100);

    $name= $_GET['name'] ;
    $age = $_GET['age'];

    echo "<b> Valor guardado: $value </b> <br> <b> Valor aleatorio: $rand</b>
    <br> <b> Nome: $name </b> <br> <b> Idade: $age </b>";  ; 
    ?>
</body>
</html>