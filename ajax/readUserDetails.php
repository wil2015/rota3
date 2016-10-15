<?php
// include Database connection file
include("db_connection.php");
include('funcoes.php');
       /*
       $response['status'] = 200;
        $response['message'] = "Nao existem registro!";
        echo json_encode($response);
        return;
*/
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // get User ID
    $user_id = $_POST['id'];

    // Get User Details
    $query = "SELECT * FROM users WHERE id = '$user_id'";
    $query = "select chave_produto as id, produto, descricao, valor, peso from visao_produto WHERE chave_produto = '$user_id'";
$query = "select chave_produto as id, produto, descricao, valor, peso, qty from visao_unificada, cataloginventory_stock_item where 
	product_id = chave_produto and 	chave_produto = " . $user_id;

    $resultado2 = ler_loja($conexao, " ", 3);
 
	
	$quantidade = count($resultado2["produto"]) - 1;
     if($quantidade > 0)
    {
    	
    	$quantidade = $quantidade - 1;
        $response = array();
		for ($x = 0; $x <= $quantidade; $x++)
    	{
			if ($user_id == $resultado2["id"][$x] ){
                $row["id"]			= $resultado2["id"][$x] ; 
                $row['produto'] = $resultado2["produto"][$x] ;
                $row['descricao'] = $resultado2["descricao"][$x] ;
                $row['valor'] =  $resultado2["valor"][$x] ;
                $row['peso'] = $resultado2["peso"][$x] ;
                $row['qty'] = $resultado2["quantidade"][$x] ;
                 $response = $row;
                echo  json_encode($response);
                return;
                
            }
        }   
   
       
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Nao existem registro!";
        echo json_encode($response);
    }
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
    echo json_encode($response);
}