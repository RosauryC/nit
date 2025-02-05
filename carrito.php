<?php
// Carrito.php
require 'config/database.php';
$db = new Database();
$con = $db->conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div>
                <img src="img/productos/Logotipo.png" width="70" height="70" alt="Logo">
                <strong>Tienda Infotep</strong>
            </div>
            <nav>
                <a href="Catalogo.php">Catalogo</a>
                <a href="contacto.php">Contacto</a>
                <a href="carrito.php" class="btn btn-primary">Carrito</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h1>Carrito de Compras</h1>
            <p>Aqui se mostraran los productos seleccionados para su compra.</p>
        </div>
    </main>
</body>
</html>
<?php
// Carrito.php
require 'config/database.php';
$db = new Database();
$con = $db->conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div>
                <img src="img/productos/Logotipo.png" width="70" height="70" alt="Logo">
                <strong>Tienda Celulares de Rosa</strong>
            </div>
            <nav>
                <a href="catalogo.php">Catalogo</a>
                <a href="contacto.php">Contacto</a>
                <a href="carrito.php" class="btn btn-primary">Carrito</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h1>Carrito de Compras</h1>
            <p>Aqui se mostraran los productos seleccionados para su compra.</p>
        </div>
    </main>
</body>
</html>
