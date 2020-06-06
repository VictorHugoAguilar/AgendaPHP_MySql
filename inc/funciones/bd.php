<?php

// Definimos como constantes los datos para la conexión de la bd
define('DB_USUARIO', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NOMBRE', 'agendaBD');

$conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE );

// Para probar la conexión 
// echo "Probando Conexion -> ";
// echo $conn->ping();