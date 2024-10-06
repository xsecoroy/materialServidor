<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACTORIALES</title>
</head>
<body>
    <?php
    require('views/header.php');
    ?>
    <h1>Página de factoriales</h1>
    <ul>
        <?php
        foreach($factoriales as $numero){
            echo "<li>".$numero."</li>";
        }
        ?>
    </ul>
    
</body>
</html>