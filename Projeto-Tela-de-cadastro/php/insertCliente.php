<?php 

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

include 'conection.php';

$insertCliente = "INSERT INTO tb_cliente VALUES (NULL, '$nome', '$sobrenome', '$email', '$telefone', '$endereco')";

$resultado = $conection->query($insertCliente);

if($resultado) {
    echo"<script>alert('inserido com sucesso'); history.back() </script>";
}
?>
