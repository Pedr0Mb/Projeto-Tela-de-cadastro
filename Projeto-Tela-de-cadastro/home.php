<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/home.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <header style="color: rgb(37, 93, 247); margin:10px; font-weight: 700;">
    <?php
        session_start();
        if(isset($_SESSION['nm_funcionario'])){
            $nome = $_SESSION['nm_funcionario'];
            echo"Olá ".$nome;
        }else{
            echo "<script>alert('Voçê não está logado!'); history.back()</script>";
        }
    ?>
        <p class="titulo">Home</p>
        <a href="Login.html" class="btnSair"> 
            <p class="dsBtnSair">sair</p>
        </a>
    </header>
    <main class="main">
        <div class="btns">
            <a href="LancamentoDespesa.html" class="btn">
                <div class="icon">
                    <i class="bi bi-clipboard2-plus"></i>
                    </div>
                    <p class="dsBtn">Lançamento Despesas</p>                
                </a>
                <a href="LancamentoReceita.html" class="btn">
                    <div class="icon">
                        <i class="bi bi-clipboard2-plus"></i>
                    </div>
                    <p class="dsBtn">Lançamento Receita</p>
                </a>
                <a href="LoginCliente.html" class="btn">
                    <div class="icon">
                        <i class="bi bi-person-add"></i>
                    </div>
                        <p class="dsBtn"> Cadastrar Cliente</p>
                    </a>
                <a href="LoginFornecedor.html" class="btn">
                    <div class="icon">
                        <i class="bi bi-person-add"></i>
                    </div>
                <p class="dsBtn"> Cadastrar Fornecedor</p>
            </a>

        </div>
        
    </main>
</body>
</html>
