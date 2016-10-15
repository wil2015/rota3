<?php
#chama o arquivo de configuração com o banco
/*
$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'magento';
#seleciona os dados da tabela produto
// include("db_connection.php");

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno($conexao)) {
	echo "Problemas para conectar no banco. Verifique os dados! \n" . "==" . $_SERVER['SERVER_NAME'] . "==".  mysqli_connect_error();
	
	die();
}
*/
session_start();
include("db_connection.php");
$loja = $_SESSION['sessao_loja_id'];
$query = mysqli_query($conexao, "SELECT categoria, nome_da_categoria FROM categoria where id_loja = " . $loja );
if (!$query) {
    echo 'Não foi possível executar a consulta: ' . mysqli_error();
    exit;
}
$data = array();

while($prod = mysqli_fetch_array($query)) {
    /*
        $data['categoria'] = $prod['categoria'];
        $data['nome_da_categoria'] = $prod['nome_da_categoria'];
     */   
        $data[] = array(
             'categoria' => $prod['categoria'],
             'nome_da_categoria' => $prod['nome_da_categoria'],
         );

};
echo json_encode($data);

// Free result set
mysqli_free_result($query);

mysqli_close($conexao);
?>