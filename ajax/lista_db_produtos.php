<?php
session_start();
if (isset($_GET["q"])){
	$var=$_GET["q"];
}else{ 
	$var = " ";
};
// echo "entrada = " . $var;
$loja = $_SESSION['sessao_loja_id'];
$tipo_de_loja = 	$_SESSION['sessao_tipo_loja'];


include('db_connection.php');

include('funcoes.php');

function preenche($resultado, $parte1, $parte2, $parte3, $url, $parte_visao, $return) {
	
	$return.= "<td>" . $resultado["produto"] . "</td>";
	$return.= "<td>" . $resultado["descricao"]. "</td>"; /* DESCRIÇÃO */
	$return.= "<td>" . $resultado["nome_da_loja"] . "</td>"; /* produtor */
	$return.= "<td>" . $resultado["estado"] . "/" . $resultado["cidade"] . "</td>"; /* produtor */
	$return.= "<td>" . $resultado["valor"] . "</td>";
	$return.= "<td>" . $resultado["peso"] . "</td>";
	$return.= "<td>" . $parte1 . "http://" . $url . "/" . $resultado["id"] . $parte_visao .   $resultado["visao"] . $parte2 . "</td>";
	$return.= "<td>" . $parte1 . "chat/examples/rota" .   $parte3 . "</td>"; /* negociar */
	$return.= "</tr>";
	return $return;
};


?>

	
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Lista de Produtos</h1>
  </div>
 <br/>
		
		
  <div class="row">
	<div class="col-md-12">
	  <table class="table table-bordered">
		<thead class="thead-inverse">		
		  <tr>
		  
       			<th class="text-center" bgcolor="#80aeff" style="color:white;">PRODUTO</th>
            <th class="text-center" bgcolor="#80aeff" style="color:white;">DESCRIÇÃO</th>
            <th class="text-center" bgcolor="#80aeff" style="color:white;">PRODUTOR</th>
            <th class="text-center" bgcolor="#80aeff" style="color:white;">ESTADO/CIDADE</th>
            <th class="text-center" bgcolor="#80aeff" style="color:white;">VALOR/R$</th>
						<th class="text-center" bgcolor="#80aeff" style="color:white;">PESO/KG</th>
						<th class="text-center" bgcolor="#80aeff" style="color:white;">COMPRAR</th> 
						<th class="text-center" bgcolor="#80aeff" style="color:white;">NEGOCIAR</th>
					
		  </tr>
		</thead>
		<tbody>
				
				<?php 
				if ($bdServidor = "localhost") {
					$url = "localhost/magento";
				}else {
					$url=$bdServidor;
				};

				$url = "ec2-54-209-29-39.compute-1.amazonaws.com/catalog/product/view/id";
		
				$return = "<tr >";
			
				$parte1 = "<input type=button onclick=\"location.href='"; 
				$parte2 = "'\"value='Comprar'"; 
				$parte_visao = ".html?___store=";
				$parte_visao = "?___store=";
				$parte3 = ".html'\"value='Negociar'";
				$resultado2 = ler_loja($conexao, " ", 1);
				
		
				$quantidade = count($resultado2["produto"]) - 1;
				for ($x = 0; $x <= $quantidade; $x++) {
					 if ( $resultado2["tipo_de_loja"][$x] != $tipo_de_loja){
									
										$resultado["id"]			= $resultado2["id"][$x] ; 
                    $resultado["produto"] 		= $resultado2["produto"][$x] ;
                    $resultado["html"]			= $resultado2["html"][$x] ;
                    $resultado["descricao"] 	= $resultado2["descricao"][$x] ;
                    $resultado["peso"] 			= $resultado2["peso"][$x] ;
                    $resultado["valor"]			= $resultado2["valor"][$x] ;
                    $resultado["quantidade"] 	= $resultado2["quantidade"][$x] ;
                    $resultado["loja"] 			= $resultado2["loja"][$x] ;
                    $resultado["nome_da_loja"]  = $resultado2["nome_da_loja"][$x] ;
                    $resultado["estado"] 		= $resultado2["estado"][$x];
                    $resultado["cidade"] 		= $resultado2["cidade"][$x];
                    $resultado["visao"] 		= $resultado2["visao"][$x];
                     
					 
					
									if ($var == " "){
										$return = preenche($resultado, $parte1, $parte2, $parte3, $url, $parte_visao, $return);
									}elseif (strlen(stristr($resultado, $var)) > 0)  {
											$return = preenche($resultado[$key], $parte1, $parte2, $parte3, $url, $parte_visao, $return);
										}

					 }
									
				};
				echo $return.="</tbody></table>";
				mysqli_close($conexao);
				?>
	</tbody>
	  </table>
	</div>
	</div>
</div> <!-- /container -->
