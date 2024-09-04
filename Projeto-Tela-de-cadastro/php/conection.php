<?php

$server = 'localhost';
$user = 'root';
$password = 'root';
$database = 'bd_loja';

$conection = new mysqli($server,$user,$password,$database);

if($conection -> connect_error){
    die('falhou a conexão'. $conection -> connect_error);
}else{
    echo'Conexão realizada com sucesso';
}   

?>