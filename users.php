<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres de usuario</title>
    <link rel="stylesheet" href="estilines.css">
</head>
<body>
    <br>
    <h1>Crear nombre de usuario</h1>
    <hr>
    <form method="Post" action="">
        <h2>Ingresar datos:</h2>
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
    <br>
    <p class="lol">
    <?php
        if($_SERVER["REQUEST_METHOD"]=== "POST" && isset($_POST['registrar'])) {
            require_once("funcionsillas.php");
            $nom= strval($_POST['nom']);
            $inst= strval($_POST['inst']);
            $a= strval($_POST['a']);
            echo "Su nombre de usuario es: " . "<strong>" . generar_usuario($nom, $inst, $a) . "</strong>";
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