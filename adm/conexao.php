<?php

$bdservidor = '127.0.0.1';
$bdusuario = 'root';
$bdsenha = '';
$bdbanco = 'BD_CONDOMINIO';

$conexao = mysqli_connect($bdservidor, $bdusuario, $bdsenha, $bdbanco);

if (mysqli_connect_error()){
	
	echo "Problemas para conectar! Verifique a conexão.";
	die();
		
}
?>