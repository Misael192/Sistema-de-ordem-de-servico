<?php session_start(); 
if (!isset($_SESSION['nomes']) && $_SESSION['nomes'] == false){
	header("Location: index.php");
}?>
<!DOCTYPE html>
<html>
<head>
    <title>Pesquisa Morador</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
</head>
<body class="bg-light">

    <?php include "menu.php";?>
    <div class="container">
    <br><br>
        <h1 class="text-center">Pesquisa Morador:</h1>
        <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Número</th>
                        <th>Nome</th>
                        <th>Bloco</th> 
                        <th>Apartamento</th>
                        <th>RG</th>
                        <th>CPF</th> 
                    </tr>
                </thead>
        <?php
        include("conexao.php");
        if(isset($_POST['pesquisar'])){
            $pesquisar = $_POST['pesquisar'];
        }
        echo "<br><h2>Resultados da Pesquisa:</h2>";
        $result_bd = "SELECT * FROM TB_MORADOR where NOME_M like '%$pesquisar%' limit 5";
        $resultado_bd = mysqli_query($conexao, $result_bd);
        if(mysqli_num_rows($resultado_bd) <= 0 ){
            echo "<td>Morador não encontrado...</td>";
        }else{
            while($rows = mysqli_fetch_array ($resultado_bd))
            {
                echo"<tbody><tr class='col-md-3'>";
                echo "<td>".$rows['ID_M']."</td>" ;
                echo "<td>".$rows['NOME_M']."</td>" ;
                echo "<td>".$rows['BLOCO_M']."</td>";
                echo "<td>".$rows['AP_M']."</td>";
                echo "<td>".$rows['RG_M']."</td>";
                echo "<td>".$rows['CPF_M']."</td>";
                echo "</tbody></tr>";
            }
        }
        ?>
    </diV>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>
