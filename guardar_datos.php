<?php
session_start();
if (isset($_POST['rol'])) {
    $rol = $_POST['rol'];

    $_SESSION['rol'] = $rol;
    header("Location: dependencia.php");
    
}
if (isset($_POST['cor'])) {
    $cor = $_POST['cor'];

    $_SESSION['cor'] = $cor;
    header("Location: datos.php");
    
}
if (isset($_POST['enviar'])) {

// Establecer la conexión con la base de datos
$host = 'localhost'; // Nombre del servidor de la base de datos
$dbname = ''; // Nombre de la base de datos
$username = ''; // Nombre de usuario de la base de datos
$password = ''; // Contraseña de la base de datos

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los valores de los grupos de checkboxes
        $grupo1 = isset($_POST['grupo1']) ? $_POST['grupo1'] : [];
        $grupo2 = isset($_POST['grupo2']) ? $_POST['grupo2'] : [];
        $grupo3 = isset($_POST['grupo3']) ? $_POST['grupo3'] : [];

        // Obtener los valores de las variables adicionales
        $rol = $_SESSION['rol'];
        $cordinacion = $_SESSION['cor'];

        // Convertir los valores de los grupos en cadenas
        $grupo1_str = implode(',', $grupo1);
        $grupo2_str = implode(',', $grupo2);
        $grupo3_str = implode(',', $grupo3);

        // Preparar la consulta SQL para insertar los datos en la tabla
        $consulta = $conexion->prepare("INSERT INTO dexperiencia (rol, cordinacion, campo1, campo2, campo3) VALUES (?, ?, ?, ?, ?)");

        // Ejecutar la consulta
        $consulta->execute([$rol, $cordinacion, $grupo1_str, $grupo2_str, $grupo3_str]);

        // Redirigir a otra página después de guardar los datos
        header("Location: gracias.php");
        exit();
    }
} catch (PDOException $e) {
    echo "Error al conectar con la base de datos: " . $e->getMessage();
}




}


exit();
?>
