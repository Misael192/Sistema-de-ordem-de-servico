<?php
	session_start();
    include('conexao.php');
	if(isset($_POST['nome'])){
		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$c_senha = $_POST['c_senha'];
		$rg = $_POST['RG'];
		$cpf = $_POST['CPF'];
		
		$query_bd = "SELECT * FROM TB_SINDICO WHERE NOME_S = '$nome'";
		$query_bd = mysqli_query($conexao,$query_bd);
		
		if(mysqli_num_rows($query_bd) > 0){
            echo "Usuário Ja Cadastrado!";
            $_SESSION['erro'] = "Usuário Ja Cadastrado!";
            header("Location: Cadastro_sindico.php");
        }
        else{
			//variavel usada para passar o script sql
			$query = "INSERT INTO TB_SINDICO (NOME_S, SENHA_S, C_SENHA_S, RG_S, CPF_S) 
			VALUES ('$nome', '$senha', '$c_senha', '$rg', '$cpf') ";
			//variavel recebe o resultado da consulta sql
			$query= mysqli_query($conexao,$query) or die("Erro");
			//associa a coluna a posição do array
			mysqli_close($conexao);
			$_SESSION['cadastro'] = "Cadastro feito com sucesso!";
			header("Location: Cadastro_sindico.php");
		}
	}

?>