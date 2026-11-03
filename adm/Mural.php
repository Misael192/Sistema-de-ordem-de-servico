<?php session_start(); 
if (!isset($_SESSION['nomes']) && $_SESSION['nomes'] == false){
	header("Location: ../index.php");
}?>
<!DOCTYPE html>
<html>
	<head>
	<title>Mural</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	</head>
	<body class="bg-light">

		<?php include "menu.php";?>
		<br>
				
		<div class="container">
			<br>
			<h1 class="text-center">Mural dos Moradores</h1>
			<br>
			<div class="procurar">
				<form class="form-inline mr-auto my-2 my-md-0" method="POST" action="pesq_mural.php">
					<input type="text" name="pesquisar" class="form-control search-field" placeholder="Buscar Recados...">
					<button type="submit" class="btn btn-outline-success my-2 my-sm-0" value="pesquisar" >Procurar</button>
				</form>
			</div>
			<br>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type="radio" name="usuario" value="<?php echo"".$_SESSION['nomes']."";?>" checked="checked" hidden="on">	
				<div class="row">
					<div class="col-md-8 mb-3 offset-1">
						<textarea class="form-control" name="recado" rows="7" placeholder="Insira o texto..."></textarea>
					</div>
				</div>
				<br>
				<div class="offset-1">
					<input type="submit" name="enviar"  value="Enviar" class="btn btn-success">
					<input type="submit" name="cancelar"  value="Cancelar" class="btn btn-danger">
				</div>
				<br><br>
			</form>
		</div>
		<div class="bg-secondary col-md-5 mb-3 container">
		<?php include "../inseri_mural.php";?>
		</div>
		<br>
		<?php include "../rodape.php"?>
		<script src="../js/jquery-3.2.1.slim.min.js"></script>
		<script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</body>
</html>