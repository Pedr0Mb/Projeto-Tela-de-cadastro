<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data = $_POST['data'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$admissao = $_POST['admissao'];
$senha = $_POST['senha'];
$login = $_POST['login'];

include 'conection.php';

$insertFuncionario = "INSERT INTO tb_funcionario VALUES (NULL, '$nome', '$sobrenome', '$data', '$cargo', '$salario','$admissao','$senha','$login')";

$resultado = $conection->query($insertFuncionario);

if($resultado) {
    echo"<script>alert('inserido com sucesso'); history.back()</script>";
    header('location: ../login.html');
}
?>