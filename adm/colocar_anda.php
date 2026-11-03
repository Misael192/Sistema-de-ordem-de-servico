<?php
    session_start();
    include_once("conexao.php");
    if(isset($_GET['id'])){
        $result_chamado = "UPDATE tb_chamado SET ESTADO = 2
        WHERE ESTADO like 0 and NUMERO_CHAMADO ='".$_GET['id']."'";
        $result_chamado = mysqli_query($conexao, $result_chamado);
        header("Location: Chamados.php");
    }
?>