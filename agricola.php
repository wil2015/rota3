<?php
?>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rota Aliemntar</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
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
$(document).ready(function(){
	 
    // No id #enviar assim que clicar executa a função
    $('#enviar').click(function(){
 
    /* veja que eu criei variáveis para guardar os item
     * e só precisei usar a função val() para
     * retornar o valor dos campo para a várivel
     */
 
        var nome = $('#nome').val();
        
 		showUser(nome);
    // só parar testar coloco as variáveis em um alert, só para verificarmos <img src="https://s.w.org/images/core/emoji/72x72/1f642.png" alt="🙂" class="emoji" draggable="false">
     //   alert(nome + ' ' + idade);
    });
});


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
				  <button type="button" class="btn btn-default" value="Legumes" 	onclick="showUser(this.value)"><p class="text-left">Legumes</button> 
				  <button type="button" class="btn btn-primary disabled"></button> 
				  <button type="button" class="btn btn-default" value="Hortaliças" 	onclick="showUser(this.value)"><p class="text-left">Hortaliças</button>
				  <button type="button" class="btn btn-primary disabled"></button> 
				     <!-- Bootstrap -->
				  <button type="button" class="btn btn-default" value="Arroz" onclick="showUser(this.value)"><p class="text-left">Arroz</button>
				   <button type="button" class="btn btn-default" value="Cafe" onclick="showUser(this.value)"><p class="text-left">Cafe</button>
				   <button type="button" class="btn btn-default" value="Cacau" onclick="showUser(this.value)"><p class="text-left">Cacau</button>
				  <button type="button" class="btn btn-default" value="Bebidas" 	onclick="showUser(this.value)"><p class="text-left"> Bebidas</p></button> 
				  <button type="button" class="btn btn-primary disabled"></button> 
				  <button type="button" class="btn btn-default" value="Enlatados" 	onclick="showUser(this.value)"><p class="text-left">Enlatados</button> 
				  <button type="button" class="btn btn-primary disabled"></button> 
				  <button type="button" class="btn btn-default" value="Molhos" 	onclick="showUser(this.value)"><p class="text-left">Molhos</button>
				      <!-- Bootstrap -->
				   <button type="button" class="btn btn-primary disabled"></button> 
		    	  <button type="button" class="btn btn-default" value="Biscoitos" 		onclick="showUser(this.value)"><p class="text-left">Biscoitos</button>
				  <button type="button" class="btn btn-default" value="Bolachas" 		onclick="showUser(this.value)"><p class="text-left">Bolachas</button>
				  <button type="button" class="btn btn-default" value="leites" 		onclick="showUser(this.value)"><p class="text-left">leites</button>
				
				  <button type="button" class="btn btn-default" value="Feijao" onclick="showUser(this.value)"><p class="text-left">Feijão</button>
				 
				  <button type="button" class="btn btn-default" value="Trigo" onclick="showUser(this.value)"><p class="text-left">Trigo</button>
				  <button type="button" class="btn btn-default" value="Fermento" onclick="showUser(this.value)"><p class="text-left">Fermento</button>
				  <button type="button" class="btn btn-default" value="Farinha" onclick="showUser(this.value)"><p class="text-left">Farinha</button>
				  <button type="button" class="btn btn-default" value="Oleos" onclick="showUser(this.value)"><p class="text-left">Oleos</button>
				      <!-- Bootstrap -->				  
				   <button type="button" class="btn btn-primary disabled"></button> 
				     <button type="button" class="btn btn-default" value="Bolo" onclick="showUser(this.value)"><p class="text-left">Massas de Bolo</button>
				  <button type="button" class="btn btn-default" value="Pudim" onclick="showUser(this.value)"><p class="text-left">Massas de Pudim</button>
				  <button type="button" class="btn btn-default" value="Gelatina" onclick="showUser(this.value)"><p class="text-left">Gelatinas</button>
				  <button type="button" class="btn btn-default" value="Flans" onclick="showUser(this.value)"><p class="text-left">Flans</button>
				   <button type="button" class="btn btn-primary disabled"></button> 
				     <button type="button" class="btn btn-default" value="Salsichas" 		onclick="showUser(this.value)"><p class="text-left">Salsichas</button>
				  <button type="button" class="btn btn-default" value="Linguiças" 			onclick="showUser(this.value)"><p class="text-left">Linguiças</button>
				  <button type="button" class="btn btn-default" value="Queijos" 				onclick="showUser(this.value)"><p class="text-left">Queijos</button>
				  <button type="button" class="btn btn-default" value="Presuntos" onclick="showUser(this.value)"><p class="text-left">Presuntos</button>
				  <button type="button" class="btn btn-default" value="Salames" onclick="showUser(this.value)"><p class="text-left">Salames</button>
				  <button type="button" class="btn btn-default" value="Mortadelas" onclick="showUser(this.value)"><p class="text-left">Mortadelas</button>
				  <button type="button" class="btn btn-default" value="Hamburguer" onclick="showUser(this.value)"><p class="text-left">Hamburguer</button>
				  <button type="button" class="btn btn-default" value="Iogurtes" onclick="showUser(this.value)"><p class="text-left">Iogurtes</button>
				  <button type="button" class="btn btn-default" value="Manteigas" onclick="showUser(this.value)"><p class="text-left">Manteigas</button>
				  <button type="button" class="btn btn-default" value="Margarinas" onclick="showUser(this.value)"><p class="text-left">Margarinas</button>
				  <button type="button" class="btn btn-default" value="Massas" onclick="showUser(this.value)"><p class="text-left">Massas</button>
				   <button type="button" class="btn btn-primary disabled"></button> 
				  <button type="button" class="list-group-item" value="Temperos" onclick="showUser(this.value)"><p class="text-left">Temperos</button>
				  <button type="button" class="btn btn-primary disabled"></button> 
				     <button type="button" class="btn btn-default" value="Bovina" 		onclick="showUser(this.value)"><p class="text-left">Carne Bovina</button>
				  <button type="button" class="btn btn-default" value="Suina" 			onclick="showUser(this.value)"><p class="text-left">Carne Suina</button>
				  <button type="button" class="btn btn-default" value="Bode" 				onclick="showUser(this.value)"><p class="text-left">Carne de Bode</button>
				  <button type="button" class="btn btn-default" value="Aves" onclick="showUser(this.value)"><p class="text-left">Aves</button>
				  <button type="button" class="btn btn-default" value="Ovos" onclick="showUser(this.value)"><p class="text-left">Ovos</button>
				  <button type="button" class="btn btn-default" value="Peixe" onclick="showUser(this.value)"><p class="text-left">Peixe</button>
				  <button type="button" class="btn btn-default" value="Camarao" onclick="showUser(this.value)"><p class="text-left">Camarão</button>
				  <button type="button" class="btn btn-default" value="Lagosta" onclick="showUser(this.value)"><p class="text-left">Lagosta</button>
				 
				  <button type="button" class="btn btn-primary disabled"></button> 
				  <button type="button" class="btn btn-default" value="Raçoes" onclick="showUser(this.value)"><p class="text-left">Rações</button>
				   <!-- pesquisa -->		
				  <button type="button" class="btn btn-primary disabled"></button> 
				  <input type="text" class="form-control" id="nome" >
				  <button class="btn btn-default" id="enviar" >Busca</button>
				  <button type="button" class="btn btn-primary disabled"></button> 
			  	
			</div>
			
			
			
	</div>
	<div class="col-sm-8">

		<div id="txtHint"><b>Faça a sua opção de Pesquisa(agricola)...</b></div>
	 </div>
	</div>
</div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>