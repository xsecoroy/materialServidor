<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poligonos</title>
</head>
<body>
    <?php require('views/header.php'); ?>
    <form method="get" action="main.php">
        <input type="hidden" name="method" value="poligonos">

        <label for="largo">Introduce el largo del poligono: </label>
        <input type="number" name="largo" placeholder="Escribe..."><br><br>

        <label for="alto">Introduce el alto del poligono: </label>
        <input type="number" name="alto" placeholder="Escribe..."><br><br>

        <label for="figura">Selecciona una figura:</label>
        <select id="figura" name="figura">
            <option value="cuadrado">Cuadrado</option>
            <option value="triangulo">Triángulo</option>
            <option value="rectangulo">Rectángulo</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">

        <?php 
        // Verifica que el área esté definida antes de mostrarla
        if (isset($area) && isset($figura) && isset($alto) && isset($largo)) {
        echo "El área del " . htmlspecialchars($figura) . " sabiendo su alto: " . htmlspecialchars($alto) . " y su largo: " . htmlspecialchars($largo) . " es: " . htmlspecialchars($area);
        }
        ?>

    </form>
    
</body>
</html>