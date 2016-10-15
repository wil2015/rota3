<?php
?>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","lista_db.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>


</head>
<body>
<div class="container">
 
		 <h1 align="center"> Rota Alimentar</h1>
		 
</div>


<div class="container">
  <div class="row">
    <div class="col-xs-2 col-sm-2">
			<div class="btn-group-vertical" role="group" aria-label="..." >
		        	
		          <button type="button" class="btn btn-primary disabled" >PRODUTOS</button> 
				  <button type="button" class="btn btn-default" value="Verduras" 	onclick="showUser(this.value)"><p class="text-left"> Verduras</p></button> 
				  <button type="button" class="btn btn-primary disabled"></button> 
				  <button type="button" class="list-group-item" value="Legumes " 	onclick="showUser(this.value)">Legumes</button> 
				  <button type="button" class="btn btn-primary disabled"></button> 
				  <button type="button" class="list-group-item" value="Hortaliças" 	onclick="showUser(this.value)">Hortaliças</button>
				  <button type="button" class="btn btn-primary disabled"></button> 
		    	  <button type="button" class="btn btn-default" value="Arroz" 		onclick="showUser(this.value)"><p class="text-left">Arroz</button>
				  <button type="button" class="btn btn-default" value="Cafe" 		onclick="showUser(this.value)"><p class="text-left">Café</button>
				  <button type="button" class="btn btn-default" value="Cacau" 		onclick="showUser(this.value)"><p class="text-left">Cacau</button>
				  <button type="button" class="btn btn-default" value="Cana-de Açucar" onclick="showUser(this.value)"><p class="text-left">Cana-de-Açúcar</button>
				  <button type="button" class="btn btn-default" value="Milho Convencional" onclick="showUser(this.value)"><p class="text-left">Milho Convencional</button>
				  <button type="button" class="btn btn-default" value="Milho Trangenico" onclick="showUser(this.value)"><p class="text-left">Milho Transgênico</button>
				  <button type="button" class="btn btn-default" value="Soja Convencional" onclick="showUser(this.value)"><p class="text-left">Soja Convencional</button>
				  <button type="button" class="btn btn-default" value="Soja Trangenica" onclick="showUser(this.value)"><p class="text-left">Soja Transgênica</button>
				  <button type="button" class="btn btn-default" value="Trigo" onclick="showUser(this.value)"><p class="text-left">Trigo</button>
				   <button type="button" class="btn btn-primary disabled"></button> 
				  <button type="button" class="btn btn-default" value="Frutas" onclick="showUser(this.value)"><p class="text-left">Frutas</button>
				   <button type="button" class="btn btn-primary disabled"></button> 
				  <button type="button" class="list-group-item" value="Condimentos" onclick="showUser(this.value)"><p class="text-left">Condimentos</button>
				  <button type="button" class="btn btn-primary disabled"></button> 
				  <button type="button" class="btn btn-default" value="Carne de Boi" onclick="showUser(this.value)"><p class="text-left">Carne de Boi</button>
				  <button type="button" class="btn btn-default" value="Carne de Porco" onclick="showUser(this.value)"><p class="text-left">Carne de Porco</button>
				  <button type="button" class="btn btn-default" value="Carne de Bode" onclick="showUser(this.value)"><p class="text-left">Carne de Bode</button>
				  <button type="button" class="btn btn-default" value="Aves" onclick="showUser(this.value)"><p class="text-left">Aves</button>
				  <button type="button" class="btn btn-default" value="Ovos" onclick="showUser(this.value)"><p class="text-left">Ovos</button>
				  <button type="button" class="btn btn-default" value="Peixe" onclick="showUser(this.value)"><p class="text-left">Peixe</button>
				  <button type="button" class="btn btn-primary disabled"></button> 
				 
			 	  <form role="form"  method="post" action="lista_db.php">
					  <div class="form-group">
					        <input type="text" class="form-control" id="texto" name="texto">
					
					
					  <button type="submit" class="btn btn-default">Busca</button>
					    </div>
				  </form>
			  	<button type="button" class="btn btn-primary disabled"></button> 
			  	
			</div>
			
			
			
	</div>
	<div class="col-sm-8">

		<div id="txtHint"><b>Faça a sua opção de Pesquisa...</b></div>
	 </div>
	</div>
</div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>