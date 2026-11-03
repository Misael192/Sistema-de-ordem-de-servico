<?php
	include('conexao.php');
	$agend_bd = "SELECT * FROM tb_agendamento";
	$agend_bd = mysqli_query($conexao, $agend_bd);
	if(mysqli_num_rows($agend_bd) <= 0 ){
    echo "<td>Nenhuma Data Agendada...</td>";
	}else{
    	while($rows = mysqli_fetch_assoc($agend_bd)){
			echo"<tbody><tr class='col-md-3'>";
			echo "<td>".$rows['NUMERO_AGENDAMENTO']."</td>";
			echo "<td>".$rows['DATA_AGENDAMENTO']."</td>" ;
			echo "<td>".$rows['HORA']."</td>" ;
			echo "<td>".$rows['NOME_M']."</td>" ;
			echo "<td>".$rows['BLOCO_M']."</td>";
			echo "<td>".$rows['AP_M']."</td>" ;
			echo "<td>".$rows['TIPO_AGENDAMENTO']."</td>";
			echo "</tbody></tr>";
		}
	}
?>