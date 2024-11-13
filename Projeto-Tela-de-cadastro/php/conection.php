<?php

$server = 'localhost';
$user = 'root';
$password = 'root';
$database = 'bd_loja';

$conection = new mysqli($server,$user,$password,$database);

if($conection -> connect_error){
    echo'erro na conexão';
}else{
    echo'Conexão realizada com sucesso';
}   

?>