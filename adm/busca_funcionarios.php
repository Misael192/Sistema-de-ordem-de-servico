<?php session_start(); 
if (!isset($_SESSION['nomes']) && $_SESSION['nomes'] == false){
	header("Location: index.php");
}?>
<!DOCTYPE html>
<html>
<head>
    <title>Pesquisa Funcionário</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
</head>
<body class="bg-light">

    <?php include "menu.php";?>
    <div class="container">
    <br><br>
        <h1 class="text-center">Pesquisa Funcionário:</h1>
        <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Número</th>
                        <th>Nome</th>
                        <th>RG</th> 
                        <th>Cargo</th>
                        <th>CNPJ da Empresa</th>
                    </tr>
                </thead>
        <?php
        include("conexao.php");
        if(isset($_POST['pesquisar'])){
            $pesquisar = $_POST['pesquisar'];
        }
        echo "<br><h2>Resultados da Pesquisa:</h2>";
        $result_bd = "SELECT * FROM tb_funcionario where RG_F like '%$pesquisar%' limit 5";
        $resultado_bd = mysqli_query($conexao, $result_bd);
        if(mysqli_num_rows($resultado_bd) <= 0 ){
            echo "<td>Funcionário não encontrado...</td>";
        }else{
            while($rows = mysqli_fetch_array ($resultado_bd))
            {
                echo"<tbody><tr class='col-md-3'>";
                echo "<td>".$rows['ID_F']."</td>" ;
                echo "<td>".$rows['NOME_F']."</td>" ;
                echo "<td>".$rows['RG_F']."</td>";
                echo "<td>".$rows['CARGO_F']."</td>";
                echo "<td>".$rows['CNPJ_F']."</td>";
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
