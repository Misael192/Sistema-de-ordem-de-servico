<?php session_start(); 
if (!isset($_SESSION['nomes']) && $_SESSION['nomes'] == false){
	header("Location: ../index.php");
}?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/navbar.css">
		<script>
		function validaCPF(cpf) 
 {
   erro = new String;
 
 	if (cpf.value.length == 11)
 	{	
 			cpf.value = cpf.value.replace('.', '');
 			cpf.value = cpf.value.replace('.', '');
 			cpf.value = cpf.value.replace('-', '');
 
 			var nonNumbers = /\D/;
 	
 			if (nonNumbers.test(cpf.value)) 
 			{
 					erro = "A verificacao de CPF suporta apenas números!"; 
 			}
 			else
 			{
 					if (cpf.value == "00000000000" || 
 							cpf.value == "11111111111" || 
 							cpf.value == "22222222222" || 
 							cpf.value == "33333333333" || 
 							cpf.value == "44444444444" || 
 							cpf.value == "55555555555" || 
 							cpf.value == "66666666666" || 
 							cpf.value == "77777777777" || 
 							cpf.value == "88888888888" || 
 							cpf.value == "99999999999") {
 							
 							erro = "Número de CPF inválido!"
 					}
 	
 					var a = [];
 					var b = new Number;
 					var c = 11;
 
 					for (i=0; i<11; i++){
 							a[i] = cpf.value.charAt(i);
 							if (i < 9) b += (a[i] * --c);
 					}
 	
 					if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
 					b = 0;
 					c = 11;
 	
 					for (y=0; y<10; y++) b += (a[y] * c--); 
 	
 					if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
 	
 					if ((cpf.value.charAt(9) != a[9]) || (cpf.value.charAt(10) != a[10])) {
 						erro = "Número de CPF inválido.";
						
 					}
 			}
 	}
 	else
 	{
 		if(cpf.value.length == 0)
 			return false
 		else
 			erro = "Número de CPF inválido.";
 	}
 	if (erro.length > 0) {
 			alert(erro);
 			cpf.focus();
 			return false;
 	} 	
 	return true;	
 }
 
 //envento onkeyup
 function maskCPF(CPF) {
 	var evt = window.event;
 	kcode=evt.keyCode;
 	if (kcode == 8) return;
 	if (CPF.value.length == 3) { CPF.value = CPF.value + '.'; }
 	if (CPF.value.length == 7) { CPF.value = CPF.value + '.'; }
 	if (CPF.value.length == 11) { CPF.value = CPF.value + '-'; }
 }
 
 // evento onBlur
 function formataCPF(CPF)
 {
 	with (CPF)
 	{
 		value = value.substr(0, 3) + '.' + 
 				value.substr(3, 3) + '.' + 
 				value.substr(6, 3) + '-' +
 				value.substr(9, 2);
 	}
 }
 function retiraFormatacao(CPF)
 {
 	with (CPF)
 	{
 		value = value.replace (".","");
 		value = value.replace (".","");
 		value = value.replace ("-","");
 		value = value.replace ("/","");
 	}
 }
</script>
	</head>
	<body class="bg-light">

		<?php include "menu.php";?>

		<div class="container">
			<br>
	 		<h1 class="text-center">Cadastro de Síndico</h1>
	 		<br>
			<div class="mb-3">
				<div class="dropdown offset-1">
					<label>Tipo de Usuário</label>
					<button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Síndico
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
					     <li role="presentation"><a href="Cadastro_sindico.php" class="btn">Sindico</a></li>
					     <li role="presentation"><a href="Cadastro_visitante.php" class="btn">Visitante</a></li>
					     <li role="presentation"><a href="Cadastro_fucionarios.php" class="btn">Funcionários</a></li>
					     <li role="presentation"><a href="Cadastro_morador.php" class="btn">Morador</a></li>
					</ul>
				</div>
				<br>
				<form action="valida_cad_sindico.php" method="POST">
					<div class="row offset-1">
						<div class="col-md-8 mb-3">
							<label for= "nome">Nome:<span class="text-danger"> *</span></label>
							<input name="nome" type="text" class="form-control" id="textNome" placeholder="Nome" required title="Nome">
						</div>
					</div>
					<div class="row offset-1">
							<div class="col-md-4 mb-3">
								<label for="RG"> RG:<span class="text-danger"> *</span></label>
								<input type="text" name="RG" class="form-control" id="RG" maxlength="9" placeholder="RG" required data-mask-maxlength="false" title="RG" autocomplete="off">
							</div>
							<div class="col-md-4 mb-3">
								<label for="CPF">CPF:<span class="text-danger"> *</span></label>
								<input type="text" name="CPF" class="form-control" id="cpf" size="12" maxlength="11"  onKeyPress="return Apenas_Numeros(event);" onBlur="validaCPF(this);" placeholder="CPF" required autocomplete="off">
							</div>
					</div>
					<div class="row offset-1">
						<div class="col-md-4 mb-3 ">
							<label for="senha">Senha:<span class="text-danger"> *</span></label>
							<input type="Password" name="senha" class="form-control" required>
						</div>
						<div class="col-md-4 mb-3">
							<label for="senha">Confirme sua Senha:<span class="text-danger"> *</span></label>
							<input type="password" name="c_senha" class="form-control" required>
						</div>
					</div>
					<div class="offset-1">
						<br>
						<input type="submit" name="Cadastrar" value="Cadastrar" class="btn btn-success">
						<input type="submit" name="Cancelar"  value="Cancelar" class="btn btn-danger">
					</div>
				</form>
			</div>
			<br>
			<h3 class="text-center text-success text-log">
					<?php
						if (isset($_SESSION['cadastro']))
						{
							echo    "<script>
										alert('Cadastrado com sucesso');
									</script>";
							echo $_SESSION['cadastro'];
							unset ($_SESSION['cadastro']);							
						}
					?>
			</h3>
			<h3 class="text-center text-danger text-log">
					<?php
						if (isset($_SESSION['erro']))
						{
							echo    "<script>
										alert('Usuário Ja Cadastrado!');
									</script>";
							echo $_SESSION['erro'];
							unset ($_SESSION['erro']);							
						}
					?>
			</h3>
		</div>	
		<?php include "../rodape.php"?>
		<script src="../js/jquery-3.2.1.slim.min.js"></script>
		<script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>

	</body>
</html>