<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres de usuario</title>
</head>
<body>
    <h1>Crear nombre de usuario</h1>
    <hr>
    <form method="Post" action="">
        <h3>Ingresar datos:</h3>
        <br>
        <label for="nom">Nombre completo:</label>
        <br>
        <input type="string" step="any" name="nom" id="nom" required>
        <br><br>
        <label for="inst">Nombre de la institución educativa:</label>
        <br>
        <input type="string" step="any" name="inst" id="inst" required>
        <br><br>
        <label for="a">Año de ingreso:</label>
        <br>
        <input type="number" step="1" name="a" id="a" min="1900" max="2026" required>
        <br><br>
        <button type="submit" name="registrar">Registrar</button>
    </form>
    <?php

    ?>
    <br>
    <div class="btn_menu">
        <a href="menu.php">
            <button type="button">Menu</button>
        </a>
    </div>
</body>
</html>