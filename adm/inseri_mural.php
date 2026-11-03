<?php
	include "conexao.php";
				if(isset($_POST['usuario'])){
					$usuario = $_POST['usuario'];
					$recado = $_POST['recado'];
					$result_recado = "INSERT INTO tb_mural (nome, recado, dia) VALUES ('$usuario', '$recado', NOW())";
					$resultado_recados= mysqli_query($conexao, $result_recado);
					$_SESSION['cadastro'] = "Postado com sucesso";
					header("Location: Mural.php");
				}
				echo "<br><h2>Recados Postados:</h2>";
				$result_recado_bd = "SELECT * FROM tb_mural";
				$resultado_recado_bd = mysqli_query($conexao, $result_recado_bd);
				if(mysqli_num_rows($resultado_recado_bd) <= 0 ){
					echo "Nenhum recado...";
				}else{
					while($rows = mysqli_fetch_assoc($resultado_recado_bd)){
						echo "<h4>".$rows['nome'].":</h4>";
						echo $rows['recado'].'<br>';
					}
				}
?>