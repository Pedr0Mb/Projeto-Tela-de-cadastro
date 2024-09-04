<?php


$nome = $_Post['nome'];
$sebrenome = $_Post['sebrenome'];
$data = $_Post['data'];
$cargo = $_Post['cargo'];
$salario = $_Post['salario'];
$admissao = $_Post['admissao'];
$senha = $_Post['senha'];
$login = $_Post['login'];

require_once 'conection.php'; 

$insert_fornecedor = 'INSERT INTO tb_fornecedor VALUES(NULL, '$Nnome', '$sobrenome', '$data', '$cargo', '$salario','$admissao','$senha','$login')';

$resultado = $conection->query($insert_fornecedor);

if($resultado) {
    header('Location: ../loginFuncionario.html')
}
?>