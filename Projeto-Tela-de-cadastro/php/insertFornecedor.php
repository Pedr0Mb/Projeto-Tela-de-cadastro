<?php

$nome = $_POST['nome'];
$contato = $_POST['contato'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

include 'conection.php';

$insert_fornecedor = "INSERT INTO tb_fornecedor VALUES (NULL, '$nome', '$contato', '$email', '$telefone', '$endereco')";

$resultado = $conection->query($insert_fornecedor);

if($resultado) {
    echo"<script>alert('inserido com sucesso'); history.back()</script>";
}
?>