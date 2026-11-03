<?php session_start(); 
if (!isset($_SESSION['nomes']) && $_SESSION['nomes'] == false){
	header("Location: ../index.php");
}?>
<!DOCTYPE html>
<html>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<title>Agendamentos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	</head>
	<body class="bg-light">
		<?php include "menu.php";?>
		<br>
		<div class="container text-center">
			<h1 class="text-center">Agendamentos</h1>
			<br>
			<h2 class="text-center">Data e Locais Agendados:</h2>
			<div class="table-responsive">
				<table class="table table-striped table-sm">
				<thead>
					<tr>
						<th>ID</th>
						<th>Data</th>
						<th>Hora</th>
						<th>Nome</th>
						<th>Bloco</th>
						<th>Apartamento</th>
						<th>Local Agendado</th>
					</tr>
				</thead>
				<?php include "inseri_agen.php";?>
			</div>
		</div>
		<script src="../js/jquery-3.2.1.slim.min.js"></script>
		<script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		</body>
</html>
