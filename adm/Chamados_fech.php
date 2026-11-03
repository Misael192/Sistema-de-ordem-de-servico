<?php session_start(); 
if (!isset($_SESSION['nomes']) && $_SESSION['nomes'] == false){
  header("Location: ../index.php");
}?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chamados</title>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/navbar.css">
</head>
<body>
<?php include "menu.php";?>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <br>
              <li class="nav-item">
                <a class="nav-link" href="Chamados.php">
                  <span data-feather="file"></span>
                  Chamados Abertos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Chamados_fech.php">
                  <span data-feather="users"></span>
                  Chamados Concluidos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Chamados_anda.php">
                  <span data-feather="users"></span>
                  Chamados Em Andamento
                </a>
              </li>
            </ul>
            </div>
        </nav>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Chamados Concluidos</h1>
          </div>


        <h2>Ordens de Servirço:</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Bloco</th>
                    <th>Apartamento</th>
                    <th>Tipo de solicitação</th>
                    <th>Descrição</th>
                    <th>data</th>
                </tr>
              </thead>
                  <?php
                  include "exibir_fech.php";?>
            </table>
          </div>
          <script src="../js/jquery-3.2.1.slim.min.js"></script>
          <script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
          <script src="../js/popper.min.js"></script>
          <script src="../js/bootstrap.min.js"></script>
</body>
</html>