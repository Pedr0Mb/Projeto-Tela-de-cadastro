<?php

$id_user = $_POST['login'];
$senha = $_POST['senha'];

include 'conection.php';

if(!is_numeric($id_user)){
    echo"<script>alert('Use apenas números'); history.back()</script>";
}else{
    $select = "SELECT *  FROM tb_funcionario  WHERE id_funcionario = $id_user";
    $query = $conection->query($select);
    $resultado = $query->fetch_assoc();
    
    $id_user_banco = $resultado['id_funcionario'];
    $senha_user_banco = $resultado['nm_senha'];

    if($id_user == $id_user_banco && $senha == $senha_user_banco){
        session_start();
        $_SESSION['nm_funcionario'] = $resultado['nm_funcionario'];
        header('location: ../ff.php');
    }else{
        echo"<script> alert('Usuario ou senha invalida'); history.back() </script>";
    }
}
?>