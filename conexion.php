
<?php
    //Conexion con la base de datos con php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'factura';

    $conection = @mysqli_connect($host,$user,$password,$db);

    if(!$conection) {
         echo "Error en la conexión";
     }
?>