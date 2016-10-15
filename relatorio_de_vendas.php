

<div class="container">

	
	
				
		<div id="vendas" onload="vendassss()"><b>Relação de Vendas...</b></div>
		
	 
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
            document.getElementById("vendas").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET","ajax/lista_db_vendas.php",true);
    xmlhttp.send();
}
</script>
