<?php
    session_start();
    include('conexao.php');
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $rg = $_POST['RG'];
        $cnpj = $_POST['Empresa'];
        $cargo = $_POST['Cargo'];

        $query  = "INSERT INTO tb_funcionario(NOME_F, RG_F, CNPJ_F, CARGO_F) 
        VALUES ('$nome', '$rg', '$cnpj', '$cargo')";

        $query= mysqli_query($conexao,$query) or die("Erro");
        mysqli_close($conexao);
        $_SESSION['cadastro'] = "Cadastro feito com sucesso!";
        header("Location: Cadastro_fucionarios.php");
     }
?>
