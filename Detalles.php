<?php
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$sql = $con->prepare("SELECT nombre, descripcion, precio FROM productos WHERE id = ? AND activo = 1");
$sql->execute([$id]);
$producto = $sql->fetch(PDO::FETCH_ASSOC);

if (!$producto) {
    echo "<h1>Producto no encontrado</h1>";
    exit;
}

$imagen = "img/productos/" . $id . "/principal.jpg";
if (!file_exists($imagen)) {
    $imagen = "img/productos/no-photo.png";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div>
                <img src="img/productos/Logotipo.png" width="70" height="70" alt="Logo">
                <strong>Tienda de Celulares de Rosa</strong>
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
            <div class="row">
                <div class="col" style="flex: 1;">
                    <img src="<?php echo $imagen; ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>" style="max-width: 100%; height: auto;">
                </div>
                <div class="col" style="flex: 2; padding-left: 2rem;">
                    <h1><?php echo htmlspecialchars($producto['nombre']); ?></h1>
                    <p><?php echo htmlspecialchars($producto['descripcion']); ?></p>
                    <h2>$<?php echo number_format($producto['precio'], 2); ?></h2>
                    <form action="agregar_carrito.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" id="cantidad" name="cantidad" value="1" min="1" style="width: 60px; margin-left: 10px;">
                        <button type="submit" class="btn btn-success">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
