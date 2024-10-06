<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
</head>
<body>
    <?php
    require('views/header.php');
    ?>
    <h1>Lista Fizz Buzz 1 al 100</h1>
    <b>Fizz = Divisibles para 3</b><br>
    <b>Buzz = Divisibles para 5</b><br>
    <b>FizzBuzz = Divisibles para 3 y 5</p><br>
    <ul>
        <?php
        foreach($listaFizzBuzz as $numero){
            echo"<li>".$numero."</li>";
        }
        ?>
    </ul>
    
</body>
</html>