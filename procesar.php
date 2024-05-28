<?php
// Obtener los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Crear una cadena con los datos del usuario
$datos_usuario = "Correo electrónico: $email - Contraseña: $password" . PHP_EOL;

// Guardar los datos en un archivo de registro (usuarios.txt) en una carpeta llamada 'datos'
if (!is_dir('datos')) {
    mkdir('datos', 0755, true);
}
file_put_contents('datos/usuarios.txt', $datos_usuario, FILE_APPEND | LOCK_EX);

// Redirigir al usuario a la página de confirmación
header("Location: confirmacion.php");
exit;
?>
