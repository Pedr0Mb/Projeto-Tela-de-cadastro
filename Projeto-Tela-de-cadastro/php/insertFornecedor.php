<?php


$nome = $_Post['nome'];
$contato = $_Post['contato'];
$email = $_Post['email'];
$telefone = $_Post['telefone'];
$endereco = $_Post['endereco'];

require_once 'conection.php'; 

$insert_fornecedor = 'INSERT INTO tb_fornecedor VALUES(NULL, '$Nnome', '$contato', '$email', '$telefone', '$endereco')';

$resultado = $conection->query($insert_fornecedor);

if($resultado) {
    header('Location: ../fornecedor.html')
}
?>