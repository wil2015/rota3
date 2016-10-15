
<?php 
		session_start();

		include("menu_nav.php"); 

		$link = $_GET["link"];
		
		$pag[1] = "industria.php";
		$pag[2] = "manipula_produtos.php";
		$pag[3] = "relatorio_de_vendas.php";
		$pag[4] = "mercado.php";	
		$pag[5] = "manipula_produtos.php";  /* fazenda cai direto no manipula produtos */
		$pag[7] = "pecuaria.php";
		
				
		
		if(!empty($link)){
			if(file_exists($pag[$link])){
				include $pag[$link];
			}else{
				include "bem_vindo.php";
			}
		}else{
			include "bem_vindo.php";
		}	
?>

 
        
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
