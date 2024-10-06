<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invertir Cadenas</title>
</head>
<body>
    <h1>Invertir Cadenas</h1>
    <form action="main.php" method="get">
        <input type="hidden" name="method" value="invertircadenas">
        <label for="cadena">Escribe el texto a invertir: </label>
        <input type="text" name="cadena" id="cadena" placeholder="Escribe"><br><br>
        <input type="submit" value="Enviar"><br><br>

        <?php
        // Inicializa la variable si no está definida
        if (!isset($cadenaInvertida)) {
            $cadenaInvertida = [];
        }

        // Mostrar la cadena invertida respetando los espacios
        echo "<p>";
        foreach ($cadenaInvertida as $elemento) {
            // Usamos htmlentities para mostrar correctamente los espacios
            echo htmlentities($elemento);
        }
        echo "</p>";
        ?>
        
    </form>
</body>
</html>
