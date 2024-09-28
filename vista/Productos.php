<?php
// vista/productos.php
include_once '../controlador/ProductoController.php';

$productoController = new ProductoController();
$productos = $productoController->obtenerProductos();

// Verificar si se ha enviado un formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['crear'])) {
        // Crear un nuevo producto
        $productoController->crearProducto($_POST['codigo'], $_POST['nombre'], $_POST['stock'], $_POST['valorUnitario']);
    } elseif (isset($_POST['actualizar'])) {
        // Actualizar un producto existente
        $productoController->actualizarProducto($_POST['codigo'], $_POST['nombre'], $_POST['stock'], $_POST['valorUnitario']);
    } elseif (isset($_POST['eliminar'])) {
        // Eliminar un producto por código
        $productoController->eliminarProducto($_POST['codigo']);
    }
    // Redirigir para evitar reenvíos de formularios
    header('Location: productos.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Lista de Productos</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Lista de Productos</h1>

        <!-- Formulario para Crear/Actualizar Producto -->
        <form method="POST" class="mb-4">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="codigo">Código</label>
                    <input type="text" name="codigo" class="form-control" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" class="form-control" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="valorUnitario">Valor Unitario</label>
                    <input type="number" name="valorUnitario" class="form-control" required>
                </div>
            </div>
            <button type="submit" name="crear" class="btn btn-primary">Guardar</button>
            <button type="submit" name="actualizar" class="btn btn-warning">Actualizar</button>
        </form>

        <!-- Tabla de Productos -->
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Valor Unitario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?php echo $producto['codigo']; ?></td>
                        <td><?php echo $producto['nombre']; ?></td>
                        <td><?php echo $producto['stock']; ?></td>
                        <td><?php echo $producto['valorUnitario']; ?></td>
                        <td>
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="codigo" value="<?php echo $producto['codigo']; ?>">
                                <button type="submit" name="eliminar" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>