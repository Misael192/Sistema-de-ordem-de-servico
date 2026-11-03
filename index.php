<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body id="LoginForm">
        <nav class="navbar navbar-light navbar-expand-md bg-warning fixed-top">
        <a class="navbar-brand" href="index.php"><img src="img/RWM.jpg" class="rmw"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
          
                <div class="collapse navbar-collapse" id="navbarsExample03">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="quem_somos.php">Quem Somos<span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
                  <ul class="navbar-nav">
                        <div class="form-inline my-2 my-md-0">
                                <li class="nav-item dropdown">
                                        <button class=" dropdown-toggle btn btn-secondary btn-lg" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuário</button>
                                  <div class="dropdown-menu" aria-labelledby="dropdown03">
                                        <button class="dropdown-item btn btn-secondary btn-lg" type="button" data-toggle="modal" data-target="#AdmModal">Adm</button>
                                        <button class="dropdown-item btn btn-secondary btn-lg" type="button" data-toggle="modal" data-target="#ClModal">Morador</button>
                                        </div>
                                 </li>
                        </div>
                  </ul>
                </div>
              </nav>

              <form name="Adm" method="POST" action="valida.php">
                    <div class="modal fade" id="AdmModal" tabindex="-1" role="dialog" aria-labelledby="AdmModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content bg-warning">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Login</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-5">
                                            <input name="usuario" type="name" id="nome" class="form-control validate">
                                            <label for="login">Usuário</label>
                                        </div>
                        
                                        <div class="md-form mb-4">
                                            <input name="senha" type="password" id="defaultForm-pass" class="form-control">
                                            <label for="senha">Senha </label>
                                        </div>
                        
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <input type="submit" name="Entrar" class="btn btn-primary" value="Entrar">
                                    </div>
                                </div>
                            </div>
                        </div>
                       
			  </form>
			  <br>
                <div class="bg-danger">
                    <h1 class="text-center text-light text-log">
                        <?php if(isset($_SESSION['loginErro'])){
                            echo $_SESSION['loginErro'];
                                unset($_SESSION['loginErro']);
                                echo    "<script>
                                             alert('Login Inválido!');
                                        </script>";
                        }?>	
                    </h1>
                </div>
                <form name="cliente" method="POST" action="valida2.php">
                            <div class="modal fade" id="ClModal" tabindex="-1" role="dialog" aria-labelledby="ClModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content bg-warning">
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title w-100 font-weight-bold">Login</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body mx-3">
                                                <div class="md-form mb-5">
                                                    <input name="usuario" type="name" id="nome" class="form-control">
                                                    <label for="login">Usuário</label>
                                                </div>
                                
                                                <div class="md-form mb-4">
                                                    <input name="senha" type="password" id="defaultForm-pass" class="form-control validate">
                                                    <label for="senha">Senha </label>
                                                </div>
                                
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <input type="submit" name="Entrar" class="btn btn-primary" value="Entrar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    	</form>
          <script src="js/jquery-3.2.1.slim.min.js"></script>
          <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
    
    
    
</body>
</html>