<?php
	session_start();
	include_once("conexao.php");

				if(isset($_POST['nome'])){
					$nome = $_POST['nome'];
                    $reformas = $_POST['reformas'];
                    $bloco = $_POST['bloco'];
                    $ap = $_POST['ap'];


					$query = "INSERT INTO tb_reformas (NOME_M, BLOCO_M, AP_M, Reformas, dia)  
                    VALUES ('$nome', '$bloco', '$ap', '$reformas', NOW()) ";
					$query= mysqli_query($conexao,$query) or die("Erro");
					mysqli_close($conexao);
					$_SESSION['cadastro'] = "Requisitado com sucesso!";
					header("Location: ../Votacoes.php");
				}
				
?>