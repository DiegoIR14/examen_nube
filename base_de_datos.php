<?php
/*
Credenciales para la conexion DB
*/
$contraseña = "rwJsdZvGtFb85wUcvwAL";
$usuario = "postgres";
$nombreBaseDeDatos = "railway";
$rutaServidor = "postgresql://postgres:rwJsdZvGtFb85wUcvwAL@containers-us-west-148.railway.app:6944/railway";
$puerto = "6944";
try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}