<?php
	session_start();
	// include Database connection file 
	$loja = $_SESSION['sessao_loja_id'];
	$tipo_de_loja = 	$_SESSION['sessao_tipo_loja'];
	include("db_connection.php");
	include('funcoes.php');
	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Produto</th>
							<th>Descrição</th>
							<th>Valor/R$</th>
							<th>Peso/Kg</th>
							<th>Quantidade</th>
							<th>Atualizar</th>
							<th>Liberar</th>
							<th>Deletar</th>
					</tr>';
/*
	$query = "select chave_produto as id, produto, descricao, valor, peso from visao_unificada where tipo_de_loja = " . $tipo_de_loja . " order by id";
	$query = "select chave_produto as id, produto, descricao, valor, peso from visao_unificada where id_loja = " . $loja . " order by id";
	$query = "select chave_produto as id, produto, descricao, valor, peso, qty from visao_unificada, cataloginventory_stock_item where 
	product_id = chave_produto and 	id_loja = " . $loja . " order by id";
	if (!$result = mysqli_query($conexao, $query)) {
        exit(mysqli_error($conexao));
    };
   */ 
    
    $parte4 = "<img src=\"arroz.jpg\" class=\"img-responsive\" alt=\"Cinque Terre\" width=\"150\" height=\"100\"";
    
    
    $resultado2 = ler_loja($conexao, " ", 3);
				
				$quantidade = count($resultado2["produto"]);
			
 //   echo 'quantidade = ' . $quantidade;
		// echo $loja . '/' . $resultado2["loja"][1];

//	echo(array_sum(array_map('count',$resultado2 )));
//	echo (count($resultado2 ,COUNT_RECURSIVE)-count($resultado2 )); 
	// echo var_dump($resultado2);
//	echo "<pre>";
//	echo var_dump($resultado2);
//	echo "</pre>";
    // if query results contains rows then featch those rows 
    if($quantidade > 0)
    {
    	$number = 1;
    	$quantidade = $quantidade - 1;
		for ($x = 0; $x <= $quantidade; $x++)
    	{
			/* var_dump ($loja);
			var_dump ($loja); echo '//';
			var_dump ($resultado2["loja"][$x]);
			echo '//////';
			*/
	//		echo $loja . '/' . $resultado2["loja"][$x] . "</br>";
			if ($loja == $resultado2["loja"][$x]){
			$row['produto'] = $resultado2["produto"][$x] ;
			$row['descricao'] = $resultado2["descricao"][$x] ;
			$row['valor'] =  $resultado2["valor"][$x] ;
			$row['peso'] = $resultado2["peso"][$x] ;
			$row['qty'] = $resultado2["quantidade"][$x] ;
			$row['id'] = $resultado2["id"][$x] ; 
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['produto'].'</td>
				<td>'.$row['descricao'].'</td>
				<td>'.$row['valor'].'</td>
				<td>'.$row['peso'].'</td>
				<td>'.$row['qty'].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['id'].')" >Atualizar</button>
				</td>
				<td>
					<button onclick="libera_usuario('.$row['id'].')" >Liberar</button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['id'].')" >Deletar</button>
				</td>
    		</tr>';
		
    		$number++;
			}
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Sem Registros!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>