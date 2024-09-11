<?php


$nome = $_Post['nome'];
$sobrenome = $_Post['sobrenome'];
$email = $_Post['email'];
$telefone = $_Post['telefone'];
$endereco = $_Post['endereco'];

require_once 'conection.php'; 

$insert_fornecedor = 'INSERT INTO tb_cliente VALUES(NULL, '$Nnome', '$sobrenome', '$email', '$telefone', '$endereco')';

$resultado = $conection->query($insert_fornecedor);

if($resultado) {
    header('Location: ../loginCliente.html')
}
?>