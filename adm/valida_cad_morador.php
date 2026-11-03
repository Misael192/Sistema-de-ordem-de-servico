<?php
    session_start();
    include('conexao.php');
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $c_senha = $_POST['c_senha'];
        $rg = $_POST['RG'];
        $cpf = $_POST['CPF'];
        $bloco = $_POST['bloco'];
        $ap = $_POST['ap'];

        $query_bd = "SELECT * FROM TB_MORADOR WHERE NOME_M = '$nome'";
        $query_bd = mysqli_query($conexao,$query_bd);

        if(mysqli_num_rows($query_bd) > 0){
            echo "Usuário Ja Cadastrado!";
            $_SESSION['erro'] = "Usuário Ja Cadastrado!";
            header("Location: Cadastro_morador.php");
         }

        else{
            $query  = "INSERT INTO TB_MORADOR (NOME_M, SENHA_M, C_SENHA_M, RG_M, CPF_M, BLOCO_M, AP_M)  
            VALUES ('$nome', '$senha', '$c_senha', '$rg', '$cpf', '$bloco', '$ap') ";
            $query= mysqli_query($conexao,$query) or die("Erro");
            mysqli_close($conexao);
            $_SESSION['cadastro'] = "Cadastro feito com sucesso!";
            header("Location: Cadastro_morador.php");
        }
    }    
?>
