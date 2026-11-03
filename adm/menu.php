<?php
if (!isset($_SESSION['nomes']) && $_SESSION['nomes'] == false){
	header("Location: ../index.php");
}?>
    <nav class="navbar navbar-light navbar-expand-md bg-warning fixed-top">
        <a class="navbar-brand" href="home.php"><img src="../img/RWM.jpg" class="rmw"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="Cadastro_sindico.php">Cadastro</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="Chamados.php">Chamados</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="Agendamentos.php">Agendamentos</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="Votacoes.php">Votações</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="Mural.php">Mural</a></li>
            </ul> 
            <ul class="navbar-nav">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="../logout.php">Sair</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav px-3">
            <div class="form-inline my-2 my-md-0">
                <li class="nav-item dropdown">
                    <img><svg class="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"/></svg></img>
                    <figcaption><?php echo"".$_SESSION['nomes']."";?></figcaption>
                </li>
            </div>
        </ul>
    </nav>