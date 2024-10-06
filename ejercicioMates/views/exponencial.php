<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
    require('views/header.php');
    ?>
    <h1>PÁGINA EXPONENCIAL<h1>
    <ul>
        <?php
        foreach($resultado as $elemento){
            echo"<li>".$elemento."</li>";
        }
        ?>
    </ul>
</body>
</html>