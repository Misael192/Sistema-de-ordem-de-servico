<?php
include_once("conexao.php");
		
		//Pesquisar os produtos
		$result_produto = "SELECT * FROM tb_votacao";
		$resultado_produto = mysqli_query($conexao, $result_produto);
		
		while($row_produto = mysqli_fetch_assoc($resultado_produto)){
            echo"<tbody><tr class='col-md-3'>";
            echo "<td>".$row_produto['id']."</td>" ;
			echo "<td>".$row_produto['nome']."</td>" ;
			echo "<td>".$row_produto['qnt_voto']."</td>";
			echo "</tbody></tr>";
		}
?>