<?php

include("db_connection.php");


$select = "SELECT product_id, price,  'em analise' as texto FROM sales_order_item 
		   union 
		   SELECT product_id, price, 'faturado'  as texto FROM sales_invoice_item
		   union
			SELECT product_id, price, 'enviado' as texto  FROM sales_shipment_item	
		" ;

$query = mysqli_query($conexao, $select);
if (!$query) {
    echo 'Não foi possível executar a consulta: ' . mysqli_error();
    exit;
}


?>

	
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Lista de Vendas</h1>
  </div>
 
  <div class="row">
	<div class="col-md-12">
	  <table class="table table-bordered">
		<thead class="thead-inverse">		
		  <tr>
		  
            <th class="text-center" bgcolor="#80aeff" style="color:white;">PRODUTO</th>
            <th class="text-center" bgcolor="#80aeff" style="color:white;">SITUAÇÃO</th>
            <th class="text-center" bgcolor="#80aeff" style="color:white;">VALOR</th>
		
			
		
		  </tr>
		</thead>
		<tbody>
				
				<?php 
		
				$return = "<tr >";
			
				$parte1 = "<input type=button onclick=\"location.href='"; 
				$parte2 = ".html'\"value='Comprar'"; 
				$parte3 = ".html'\"value='Negociar'";
				while($resultado = mysqli_fetch_assoc($query)){
					
					
						$return.= "<td>" . $resultado["product_id"] . "</td>";
						$return.= "<td>" . $resultado["texto"]. "</td>"; /* DESCRIÇÃO */
						$return.= "<td>" . $resultado["price"] . "</td>";
						
						$return.= "</tr>";
					
				}

				echo $return.="</tbody></table>";
				mysqli_close($conexao);
				?>
			
	</tbody>
	  </table>
	</div>
	</div>
</div> <!-- /container -->
