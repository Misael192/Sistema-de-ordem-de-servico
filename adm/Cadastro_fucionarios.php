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
			//valida o CNPJ digitadofunction
			function Validacnpj(ObjCnpj){	
				 var cnpj = ObjCnpj.value;
				var valida = new Array(6,5,4,3,2,9,8,7,6,5,4,3,2);	
				var dig1= new Number;	
				var dig2= new Number;	

				exp = /\.|\-|\//g	
				cnpj = cnpj.toString().replace( exp, "" ); 	
				var digito = new Number(eval(cnpj.charAt(12)+cnpj.charAt(13)));	

					for(i = 0; i<valida.length; i++){	
							dig1 += (i>0? (cnpj.charAt(i-1)*valida[i]):0);		
							dig2 += cnpj.charAt(i)*valida[i];	
					}	
					dig1 = (((dig1%11)<2)? 0:(11-(dig1%11)));	
					dig2 = (((dig2%11)<2)? 0:(11-(dig2%11)));		
					if(((dig1*10)+dig2) != digito)
						alert('CNPJ Invalido!');	
							
			}
			function Apenas_Numeros(caracter){
				var nTecla = 0;
				if (document.all) {
					nTecla = caracter.keyCode;
				} else {
					nTecla = caracter.which;
				}
				if ((nTecla> 47 && nTecla <58)
				|| nTecla == 8 || nTecla == 127
				|| nTecla == 0 || nTecla == 9  // 0 == Tab
				|| nTecla == 13) { // 13 == Enter
					return true;
				} else {
					return false;
				}
			}
	</script>
</head>
<body class="bg-light">

			<?php include "menu.php";?>

		<div class="container">
			<br>
 			<h1 class="text-center">Cadastro de Funcionários</h1>
 			<br>
			<div class="mb-3">
				<div class="dropdown offset-1">
					<label>Tipo de Usuário</label>
				    <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" value="Funcionarios">Funcionários
				    <span class="caret"></span></button>
				    <ul class="dropdown-menu">
				     	<li role="presentation"><a href="Cadastro_sindico.php" class="btn">Sindico</a></li>
				     	<li role="presentation"><a href="Cadastro_visitante.php" class="btn">Visitante</a></li>
				     	<li role="presentation"><a href="Cadastro_fucionarios.php" class="btn">Funcionários</a></li>
				     	<li role="presentation"><a href="Cadastro_morador.php" class="btn">Morador</a></li>
					</ul>
				</div>
				<div class="procurar">
					<label>Buscar Funcionários:</label>
						<form class="form-inline mr-auto my-2 my-md-0" method="POST" action="busca_funcionarios.php">
							<input type="text" name="pesquisar" class="form-control search-field" maxlength="9" onKeyPress="return Apenas_Numeros(event);" placeholder="Buscar por RG...">
							<button type="submit" class="btn btn-outline-success my-2 my-sm-0" value="pesquisar" >Procurar</button>
						</form>
				</div>
				<br>
				<form>
					<div class="row offset-1">
						<div class="col-md-8 mb-3">
							<label for = "Nome">Nome:<span class="text-danger"> *</span></label>
							<input name="Nome" type="text" class="form-control" required id="Nome" placeholder="Nome">
						</div>
					</div>
					<div class="row offset-1">
						<div class="col-md-8 mb-3">
							<label for="RG"> RG:<span class="text-danger"> *</span></label>
							<input type="text" name="RG" class="form-control" id="RG" maxlength="9" placeholder="RG"  onKeyPress="return Apenas_Numeros(event);" title="RG" required autocomplete="off">
						</div>
					</div>
					<div class="row offset-1">
						<div class="col-md-6 mb-3">
							<label for = "CNPJ">CNPJ da Empresa:<span class="text-danger"> *</span></label>
							<input type="text" name="Empresa" class="form-control" id="cnpj" maxlength="18" onKeyPress="return Apenas_Numeros(event);" onBlur="Validacnpj(this);" placeholder="Cadastro de CNPJ" required autocomplete="off">
						</div>
						<div class="col-md-2 mb-3">
					        <label for="cargo">Cargo:</label><span class="text-danger"> *</span>
					        <select name="Cargo" class="custom-select d-block w-100" required="">
								<option value="">selecione..</option>
					        	<option value="Faxineiro">Faxineiro(a)</option>
					        	<option value="Porteiro">Porteiro</option>
					        	<option value="Seguranca">Segurança</option>
					        	<option value="Jardineiro">Jardineiro</option>
					        </select>	
						</div>

					</div>
					<div class="offset-1">
						<br>
						<input type="submit" name="Cadastrar" value="Cadastrar" class="btn btn-success">
						<input type="submit" name="Cancelar"  value="Cancelar" class="btn btn-danger">
					</div>
				</form>
			</div>
				<h3 class="text-center text-success text-log">
					<?php
						if (isset($_SESSION['cadastro']))
						{
							echo    "<script>
										alert('Cadastrado com sucesso!');
									</script>";
							echo $_SESSION['cadastro'];
							unset ($_SESSION['cadastro']);							
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