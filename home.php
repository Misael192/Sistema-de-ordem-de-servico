<?php session_start(); 
if (!isset($_SESSION['nome']) && $_SESSION['nome'] == false){
	header("Location: index.php");
}?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	
</head>
	<body>

        <?php include "menu.php";?>
	
		<div class="text-center" ><img src="img/background1.jpg" class="logo" alt="Unsplashed background img 1"></div>
		<div class="container">
		  	<h1 class="text-center">Bem vindo ao RMW o software que vai melhorar sua vida em condomínio! <br><br></h1>
			<br>
			<div class="jumbotron p-3 p-md-4 rounded bg-light border">
					<div class="col-md-12 px-0">
						<h2 class="display-5 text-center">O RMW é o software que agrega toda a praticidade de uma vida moderna para beneficiar síndicos e moradores de condomínio.<br><br>
						Utilizando o software para condomínio, você reduz os processos manuais, otimiza as tarefas do seu condomínio e organiza as atividades dos síndicos e moradores de forma simples e rápida.</h2><br>
							<figcaption>
									<p class="lead"> Para o síndico, o software para condomínio ajuda a organizar as suas tarefas. Diminuindo o tempo para a resolução das questões do condomínio. <br><br>
									Para os moradores, o software para condomínio é uma facilidade para ficar por dentro das novidades do condomínio e participar das decisões. Além de realizar reservas a qualquer hora.</p>
							</figcaption>
					</div>
				</div>
				
				<div class="row mb-2">
						<div class="col-md-6">
							<div class="card-body d-flex flex-column align-items-start border rounded">
							  <h4 class="mb-0">Noticias:</h4>
							  <br>
							  <iframe class="col-md-12" src="http://www.ocondominio.com.br/noticias" height="300px" frameborder="0"></iframe>
							  <a href="http://www.ocondominio.com.br/noticias">Continue Lendo..</a>
							</div>
						</div>
						<div class="col-md-6 ">
							<div class="card-body d-flex flex-column align-items-start border rounded">
								<h4 class="mb-0">Fórum:</h4>
								<br>
								<iframe class="col-md-12" src="http://conduweb.com.br/forum-debates" height="300px" frameborder="0"></iframe>
								<a href="http://conduweb.com.br/forum-debates">Continue Lendo..</a>
							</div>
						</div>
					</div>			
		</div>
		<?php include "rodape.php"?>							
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>