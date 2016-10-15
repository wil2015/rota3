<?php
session_start(); 

$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
include_once("ajax/db_connection.php");
/*
echo 'usuariao = ' . $usuariot;
echo 'senha = ' .  $senhat;
*/

$result = mysqli_query($conexao, "SELECT * FROM detalhe_loja WHERE usuario='$usuariot' AND senha='$senhat' LIMIT 1");
if (!$result) {
	echo 'Não foi possível executar a consulta: ' . mysql_error();
	exit;
}
$resultado = mysqli_fetch_assoc($result);




echo "Usuario: ".$resultado['nome'];
if(empty($resultado)){
	//Mensagem de Erro
	$_SESSION['loginErro'] = "Usuário ou senha Inválido";
	
	//Manda o usuario para a tela de login
	 header("Location: login.php"); 
	 
}else{
	//Define os valores atribuidos na sessao do usuario
	$_SESSION['sessao_loja_id'] 			= $resultado['loja_id'];
	$_SESSION['sessao_nome_loja'] 			= $resultado['nome'];
	$_SESSION['sessao_tipo_loja'] 			= $resultado['tipo_de_loja'];
	$_SESSION['sessao_login'] 				= $resultado['login'];
	$_SESSION['sessao_senha'] 				= $resultado['senha']; 
	
	switch ($resultado['tipo_de_loja']) {
		
		case 1:
			header("location:administracao.php?link=1");
			break;
		case 4:
			header("location:administracao.php?link=4");
			break;
		case 5:
			header("location:administracao.php?link=5");
			break;
		case 7:
			header("location:administracao.php?link=7"); /* pecuaria */ 
			break;
		default:
			$_SESSION['loginErro'] = "Tipo de Loja não cadastrado";
			header("Location: login.php");
	}
			
	
	
}
/*
  		$pag[1] = "industria.php";
		$pag[2] = "manipula_produtos.php";
		$pag[3] = "relatorio_de_vendas.php";
		$pag[4] = "mercado.php";	
		$pag[5] = "fazenda.php";	
		$pag[7] = "pecuaria.php";
 */
?>
