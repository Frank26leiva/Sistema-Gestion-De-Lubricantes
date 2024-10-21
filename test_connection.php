<?php
// Datos de conexión a Google Cloud SQL
$host_cloud = '34.41.10.196';  // Reemplaza con la IP de tu instancia de Cloud SQL
$user_cloud = 'lubricantesdb';  // Reemplaza con el nombre de usuario
$password_cloud = 'admin123';  // Reemplaza con la contraseña correcta
$database_cloud = 'lubricantes';  // Reemplaza con el nombre correcto de la base de datos

// Crear la conexión para Google Cloud SQL
$ConnCloud = mysqli_connect($host_cloud, $user_cloud, $password_cloud, $database_cloud);

// Verificar la conexión
if (!$ConnCloud) {
    die("Error de conexión: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa a Google Cloud SQL!";
}

// Cerrar la conexión
mysqli_close($ConnCloud);
?>
