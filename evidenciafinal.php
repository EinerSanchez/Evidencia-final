<?php
echo "INICIO DE SESION\n";


// Base de datos con usuarios y contraseñas
$basedatos = array(
    "Einer Sanchez" => "einer123",
    "Anyi Hortua" => "anyi123",
    "Oscar Ortega" => "oscar123",
    "Luisa" => "luisa123",
    "Mayer" => "mayer123"
);

// Pedimos al usuario que ingrese su usuario y contraseña
$usuario = readline("Ingrese su usuario: ");

$contraseña = readline("Ingrese su contraseña: ");

// Verificamos si el usuario existe
if (array($usuario, $basedatos)) {
    // Verificamos la contraseña-mensajes de ingreso o no ingreso
    if ($contraseña == $basedatos[$usuario]) {
        echo "¡Bienvenid@ a la huerta organica $usuario!\n";
    } else {
        echo "Contraseña incorrecta\n";
    }
} else {
    echo "Usuario no encontrado\n";
}
?>


