<?php
    session_start();
    include('conexao.php');
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $rg = $_POST['RG'];
        $cpf = $_POST['CPF'];
        $bloco = $_POST['bloco'];
        $ap = $_POST['ap'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];

        $query_bd = "SELECT * FROM tb_visitante WHERE CPF_V = '$cpf'";
		$query_bd = mysqli_query($conexao,$query_bd);

        if(mysqli_num_rows($query_bd) > 0){
            echo "Usuário Ja Cadastrado!";
            $_SESSION['erro'] = "Usuário Ja Cadastrado!";
            header("Location: Cadastro_visitante.php");
        }
        else{
            $query  = "INSERT INTO tb_visitante (NOME_V, RG_V, CPF_V, BLOCO_V, AP_V, BAIRRO_V, CIDADE_V, UF_V)  
            VALUES ('$nome', '$rg', '$cpf', '$bloco', '$ap', '$bairro', '$cidade', '$uf') ";
            $query= mysqli_query($conexao,$query) or die("Erro");
            mysqli_close($conexao);
            $_SESSION['cadastro'] = "Cadastro feito com sucesso!";
            header("Location: Cadastro_visitante.php");
        }
    }    
?>

