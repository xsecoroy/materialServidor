<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIMOS</title>
</head>
<body>
    <?php
    require('views/header.php');
    ?>
    <h1>PÁGINA PRIMOS<h1>
    <ul>
        <?php
        foreach($primos as $elemento){
            echo"<li>".$elemento."</li>";
        }
        ?>
    </ul>
    
</body>
</html>