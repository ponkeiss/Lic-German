<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claves de identificación</title>
    <link rel="stylesheet" href="estilines.css">
</head>
<body>
    <br>
    <h1>Crear clave de identificación</h1>
    <hr>
    <form method="Post" action="">
        <h2>Ingresar datos:</h2>
        <br>
        <label for="nom">Nombre completo:</label>
        <br>
        <input type="string" step="any" name="nom" id="nom" required>
        <br><br>
        <label for="fecha">Fecha de nacimiento:</label>
        <br>
        <input type="date" step="any" name="fecha" id="fecha" required>
        <br><br>
        <button type="submit" name="registrar">Registrar</button>
    </form>
    <br>
    <p class="lol">
    <?php
        if($_SERVER["REQUEST_METHOD"]=== "POST" && isset($_POST['registrar'])) {
            require_once("funcionsillas.php");
            $nom = strval($_POST['nom']);
            $fecha = strval($_POST['fecha']);
            echo "Su clave de identificacion es: " . "<strong>" . generar_clave($nom, $fecha) . "</strong>";
        }
    ?>
    </p>
    <br>
    <div class="btn_menu">
        <a href="menu.php">
            <button type="button">Menu</button>
        </a>
    </div>
</body>
</html>