
<?php include_once("menu_nav.php") ?>;




<div class="container">
  <div class="row">
    <div class="col-xs-2 col-sm-2">
			<div class="btn-group-vertical" role="group" aria-label="..." >
		        	
		          <button type="button" class="btn btn-primary disabled" >PRODUTOS</button> 
				   <button type="button" class="btn btn-default" value="farinha carne" 		onclick="showUser(this.value)"><p class="text-left">Farinha de Carne</button>
				  <button type="button" class="btn btn-default" value="farinha ossos" 		onclick="showUser(this.value)"><p class="text-left">Farinha de Ossos</button>
				  <button type="button" class="btn btn-default" value="farinha sangue" 		onclick="showUser(this.value)"><p class="text-left">Farinha de Sangue</button>
				  <button type="button" class="btn btn-default" value="pena" onclick="showUser(this.value)"><p class="text-left">Pena</button>
				  <button type="button" class="btn btn-default" value="carne" onclick="showUser(this.value)"><p class="text-left">Carne</button>
				  <button type="button" class="btn btn-default" value="Miudos" onclick="showUser(this.value)"><p class="text-left">Miudos</button>
				  <button type="button" class="btn btn-default" value="Soro leite" onclick="showUser(this.value)"><p class="text-left">Soro do Leite</button>
				  <button type="button" class="btn btn-default" value="Graos" onclick="showUser(this.value)"><p class="text-left">Graõs</button>
				  <button type="button" class="btn btn-default" value="farelos" onclick="showUser(this.value)"><p class="text-left">Farelos</button>
								 
			 	  <button type="button" class="btn btn-primary disabled"></button> 
				  <input type="text" class="form-control" id="nome" >
				  <button class="btn btn-default" id="enviar" >Busca</button>
				  <button type="button" class="btn btn-primary disabled"></button> 
			  	
			  	
			</div>
			
			
			
	</div>
	<div class="col-sm-8">
		<b><?php 
			if (isset($_SESSION['sessao_nome_loja'])){
				echo $_SESSION['sessao_nome_loja'];} else {echo "Sem Empresa...";}; ?> ...</b>
		<div id="txtHint"><b>Faça a sua opção de Pesquisa(pecuaria)...</b></div>
		<br/>
		
	
	 </div>
	</div>
</div>
<script>
window.onload = function(){

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
    xmlhttp.open("GET","ajax/lista_db_produtos.php",true);
    xmlhttp.send();
}
</script>