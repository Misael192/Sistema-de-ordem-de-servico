<?php
		include('conexao.php');
			$result_chamado_bd = "SELECT * FROM TB_CHAMADO where ESTADO like 2";
			$result_chamado_bd = mysqli_query($conexao, $result_chamado_bd);
			if(mysqli_num_rows($result_chamado_bd) <= 0 ){
				echo "<td>Nenhum chamado...</td>";
			}else{
				while($rows = mysqli_fetch_assoc($result_chamado_bd)){
					echo"<tbody><tr class='col-md-3'>";
					echo "<td>".$rows['NUMERO_CHAMADO']."</td>";
					echo "<td>".$rows['NOME_M']."</td>" ;
					echo "<td>".$rows['BLOCO_M']."</td>";
					echo "<td>".$rows['AP_M']."</td>" ;
					echo "<td>".$rows['TIPO_CHAMADO']."</td>";
					echo "<td>".$rows['DESCRICAO_CHAMADO']."</td>";
                    echo "<td>".$rows['DIA_CHAMADO']."</td>" ;
                    echo "<td><a class='btn btn-danger' href='fechar2.php?id=".$rows['NUMERO_CHAMADO']."''>Fechar</a></td>";
					echo "</tbody></tr>";
				}
			}
		?>