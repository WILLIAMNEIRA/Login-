<?php 
function conectarBD(){
    $host="host=localhost"; 
    $port="port=5432"; 
    $dbname="dbname=postgres";
    $user="user=postgres"; 
    $password="password=WILLIAMneira32";
    
    $bd = pg_connect("$host $port $dbname $user $password"); 
    if (!$bd) {
        echo "Error: ".pg_last_error(); 
    } else {
        echo "<h3> Conexion Exitosa</h3><hr>"; 
        return $bd;
    }
}
?>
