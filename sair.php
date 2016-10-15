<?php
session_start();
session_destroy();

//Remove todas as informações contidas na variaveis globais
unset($_SESSION['sessao_loja_id'],			
$_SESSION['sessao_nome_loja'], 		
$_SESSION['sessao_tipo_loja'], 
$_SESSION['sessao_login_loja'], 		
$_SESSION['sessao_senha']);

//redirecionar o usuário para a página de login
header("Location: login.php");
?>
