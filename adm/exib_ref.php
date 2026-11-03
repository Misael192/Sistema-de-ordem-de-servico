<?php 
    include_once("conexao.php");
    $result_recado_bd = "SELECT * FROM  tb_reformas";
    $resultado_recado_bd = mysqli_query($conexao, $result_recado_bd);
	if(mysqli_num_rows($resultado_recado_bd) <= 0 ){
    	echo "Nenhum recado...";
    }else{
        while($rows = mysqli_fetch_assoc($resultado_recado_bd)){
            echo"<tbody><tr class='col-md-3'>";
            echo "<td>".$rows['id']."</td>";
            echo "<td>".$rows['NOME_M']."</td>";
            echo "<td>".$rows['BLOCO_M']."</td>";
            echo "<td>".$rows['AP_M']."</td>";
            echo "<td>".$rows['Reformas']."</td>";
            echo "<td>".$rows['dia']."</td>";
            echo "</tbody></tr>";
        }
    }
?>