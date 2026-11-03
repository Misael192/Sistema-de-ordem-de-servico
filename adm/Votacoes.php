<?php session_start(); 
if (!isset($_SESSION['nomes']) && $_SESSION['nomes'] == false){
	header("Location: ../index.php");
}?>
<!DOCTYPE html>
<html>
<head>
	<title>Votações</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	</head>
	<body class="bg-light">

			<?php include "menu.php";?>
			<br><br>
 		<div class="container">
 			<h1 class="text-center">Votações</h1>
			<br><br>
				<h2 class="text-center">Reformas:</h2>
					<div class="table-responsive">
						<table class="table table-striped table-sm">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nome</th>
									<th>Bloco</th>
									<th>AP</th>
									<th>Descrição Reformas</th>
									<th>Data</th>
								</tr>
							</thead>
							<?php include "exib_ref.php";?>
						</table>
					</div>
					<br><br>
					<h2 class="text-center">Sobre a administração do Síndico:</h2>
					<br><br>
					<h2 class="text-center">Votações:</h2>
					<div class="table-responsive">
						<table class="table table-striped table-sm">
							<thead>
								<tr>
								<th>ID</th>
								<th>Votações</th>
								<th>Quantidade de votos</th>
								</tr>
							</thead>
							<?php include "exibi_vot.php";?>
						</table>
					</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php include "../rodape.php"?>
		<script src="../js/jquery-3.2.1.slim.min.js"></script>
		<script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
</body>
</html>