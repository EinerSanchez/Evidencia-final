<?php
echo "INICIO DE SESION\n";


// Base de datos con usuarios y contraseñas
$basedatos = array(
    "Einer Sanchez" => "einer123",
    "Anyi Hortua" => "anyi123",
    "Oscar Ortega" => "oscar123",
    "Luisa Campos" => "luisa123",
    "Mayer Manjarrez" => "mayer123"
);

// Pedimos al usuario que ingrese su usuario y contraseña
$usuario = readline("Ingrese su usuario: ");

$contraseña = readline("Ingrese su contraseña: ");

// Verificamos si el usuario existe
if (isset($basedatos[$usuario])) {
    // Verificamos la contraseña-mensajes de ingreso o no ingreso
    if ($contraseña == $basedatos[$usuario]) {
        echo "¡Bienvenid@ a la huerta organica $usuario!\n";
    } else {
        echo "Contraseña incorrecta\n";
        exit; // Salimos del programa si la contraseña es incorrecta
    }
} else {
    echo "Usuario no encontrado\n";
    exit; // Salimos del programa si el usuario no existe
}

//registro de personal 
echo "REGISTRO DE PERSONAL\n";
//damos opcion para cuantas personas va a registrar
$respuesta1 = readline("¿Desea registrar nuevos empleados? (S/N) :");
if ($respuesta1 == "S") :
    $numeroEmpleados = intval(readline("¿Cuantos empleados desea registrar? :"));
    for ($i = 0; $i < $numeroEmpleados; $i++) {
        $nombre = readline("Nombre: ");
        $dni = intval(readline("DNI: "));
        $genero = readline("Genero  (M / F):");
        $edad = intval(readline("Edad : "));
        $estatura = floatval(readline("Estatura (m): "));
        $peso = floatval(readline("Peso (kg): "));
        $fumador = readline("¿Fuma? (S/N) :");

        $empleados[] = ['nombre' => $nombre, 'dni' => $dni, 'genero' => $genero, 'edad' => $edad, 'estatura' => $estatura, 'peso' => $peso, 'fumador' => $fumador];
    }
else :
    echo "No quieres añadir nuevo personal, Cerrando....\n";
    exit; // Salimos del programa si el usuario no desea registrar empleados
endif;

$buscar = readline("Ingrese nombre o DNI, de empleado a buscar: ");
foreach ($empleados as $empleado) {
    if ($empleado['nombre'] == $buscar || $empleado['dni'] == $buscar) :
        echo "EMPLEADO ENCONTRADO!\n";
        echo "Edad: ". $empleado['edad']. "\n";
        echo "Genero: ". $empleado['genero'];
        break;
        
    endif;
}

?>