<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetición de palabras</title>
</head>
<body>
    <h1>Repetición de palabras</h1>
    <form action="main.php" method="get">
        <input type="hidden" name="method" value="repeticionpalabras">
        <p>Escribe el texto: </p>
        <textarea name="texto" id="texto" rows="10" cols="50" placeholder="Escribe..."></textarea><br><br>
        <input type="submit" value="Comprobar"><br><br>  
    </form>

    <?php
    foreach($listaFinal as $palabra => $repeticion){
        if($palabra == ""){
            continue;
        }else{
            echo"<p>".$palabra." = ".$repeticion." repeticiones";
        }
        
    }
    ?>
    
</body>
</html>