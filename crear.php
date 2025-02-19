<?php
// Conexión a la base de datos (reemplaza los valores con los tuyos)
$conexion = new mysqli('localhost', 'root', 'admin35', 'tienda');
// Verificar la conexión
if ($conexion->connect_error) {
 die("Error de conexión: " . $conexion->connect_error);
}

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capturar los datos del formulario
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];
    $imagen = $_POST['imagen'];

// Consulta SQL para insertar un nuevo producto
$sql = "INSERT INTO Productos (Nombre, Descripcion, Precio, Stock, Categoria, Imagen)
 VALUES ('$nombre', '$descripcion', $precio, $stock, '$categoria', '$imagen')";

if ($conexion->query($sql) === TRUE) {
 echo "Producto creado exitosamente.";
} else {
 echo "Error al crear el producto: " . $conexion->error;
}
}
// Cerrar la conexión a la base de datos
$conexion->close();
?>