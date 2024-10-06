<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparador de Anagramas</title>
</head>
<body>
    <?php require('views/header.php'); ?>

    <h1>Comparador de anagramas</h1>
    <form method="get" action="main.php">
        <input type="hidden" name="method" value="anagrama"> <!-- Campo oculto con el método -->
        <label for="palabra1">Palabra 1: </label>
        <input type="text" id="palabra1" name="palabra1" placeholder="Escribe" value="<?php echo isset($_GET['palabra1']) ? htmlspecialchars($_GET['palabra1']) : ''; ?>"><br><br>
        <label for="palabra2">Palabra 2: </label>
        <input type="text" id="palabra2" name="palabra2" placeholder="Escribe" value="<?php echo isset($_GET['palabra2']) ? htmlspecialchars($_GET['palabra2']) : ''; ?>"><br><br>
        <input type="submit" value="Comprobar">
    </form>

    <!-- Mostramos el resultado solo si existe -->
    <?php if (isset($resultado)) { echo "<p><strong>Resultado:</strong> " . $resultado . "</p>"; } ?>
    
</body>
</html>
