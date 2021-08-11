<?php
$conexion = null;
$servidor = 'localhost';
$bd = 'login';
$user = 'root';
$pass = '123456789';
try{
    $conexion = new PDO('mysql:host='.$servidor.';dbname='.$bd, $user, $pass);
}catch(PDOException $e){
    echo "Fallo la conexion con la base de datos";
    exit;
}

return $conexion;

?>