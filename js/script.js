// Add Record
// document.getElementById("add_new_record_modal").onload = function() {carrega_select()};
function addRecord() {
    // get values
    var produto = $("#produto").val();
    var descricao = $("#descricao").val();
    var valor = $("#valor").val();
    var quantidade = $("#quantidade").val();
    var peso = $("#peso").val();
    var var_categoria = $("#a1_title").val();
  //  console.log(peso);
   // console.log(categoria);
//   carrega_select();
  
 //   console.log(categoria);
      if (var_categoria == null || var_categoria == "") {
   	 
   	        alert("Selecione uma categoria");
  	        return false;
    	            
    };


    if (produto == null || produto == "") {
    //	document.getElementById('demo').innerHTML = 'valor invalido'; 
        alert("Nome do produto deve ser preenchidot");
        return false;
            
    };
    if (descricao == null || descricao == "") {
    	 
    	        alert("Descrição deve Ser preenchida");
    	        return false;
    	            
     };
      if (valor == null || valor == "") {
    	 
    	        alert("Valor deve Ser preenchida");
    	        return false;
    	            
     };
     if (quantidade == null || quantidade == "") {
    	 
    	        alert("Qauntidade deve Ser preenchida");
    	        return false;
    	            
     };
  
    if (peso == null || peso == "") {
   	 
   	        alert("Selecione uma peso");
  	        return false;
    	            
    };
 // Add record
    $.post("ajax/addRecord.php", {
        produto: produto,
        descricao: descricao,
        valor: valor,
        quantidade: quantidade,
        categoria: var_categoria,
        peso: peso
    }, function (data, status) {
        // close the popup
        	
    	 alert("Data: " + data + "\nStatus: " + status);
        $("#add_new_record_modal").modal("hide");
       
    
        readRecords();
    	

        // clear fields from the popup
        
        $("#produto").val("");
        $("#descricao").val("");
        $("#valor").val(""); 
        $("#peso").val("");
        $("#quantidade").val("");
      //  $("#categoria").val("");
        
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
    	  $(".records_content").html(data);
    	
    });
}


function DeleteUser(id) {
    var conf = confirm("Tem certeza?");
    if (conf == true) {
    	
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
            	 alert("Data: " + data + "\nStatus: " + status);
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}
function libera_usuario(id) {
    var conf = confirm("Tem certeza?");
    if (conf == true) {
    	
        $.post("ajax/liberausuario.php", {
                id: id
            },
            function (data, status) {
            	 alert("Data: " + data + "\nStatus: " + status);
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}
function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_produto").val(user.produto);
            $("#update_descricao").val(user.descricao);
            $("#update_valor").val(user.valor);
            $("#update_quantidade").val(user.qty);
            $("#update_peso").val(user.peso);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    // var produto = $("#update_produto")
    var descricao = $("#update_descricao").val();
    var valor = $("#update_valor").val();
    var quantidade = $("#update_quantidade").val();
    var peso = $("#update_peso").val();
    // get hidden field value
    var id = $("#hidden_user_id").val();


      if (descricao == null || descricao == "") {
    	 
    	        alert("Descrição deve Ser preenchida");
    	        return false;
    	            
     };
      if (valor == null || valor == "") {
    	 
    	        alert("Valor deve Ser preenchida");
    	        return false;
    	            
     };
     if (quantidade == null || quantidade == "") {
    	 
    	        alert("Qauntidade deve Ser preenchida");
    	        return false;
    	            
     };
  
    if (peso == null || peso == "") {
   	 
   	        alert("Selecione uma peso");
  	        return false;
    	            
    };
    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
     //       produto: produto,
            descricao: descricao,
            valor: valor,
            peso: peso,
            quantidade: quantidade
        },
        function (data, status) {
            // hide modal popup
        	 alert("Data: " + data + "\nStatus: " + status);
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

function carrega_select(){
      var items="";
    //   console.log(items);
  var data=[ { "ID" :"1", "Name":"Scott"},{ "ID":"2", "Name":"Jon"} ];
 // console.log(data);
      $.getJSON("ajax/categorias.php",function(data){
     //     console.log(items);
        $.each(data,function(index,item) 
        {
          items+="<option value='"+item.categoria+"'>"+item.nome_da_categoria+"</option>";
    //      console.log(items);
        });
        $("#a1_title").html(items); 
      });
    }


function lista_db_produtos(){

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
$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
    carrega_select();
    
});

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
        xmlhttp.open("GET","ajax/lista_db_produtos.php?q="+str,true);
        xmlhttp.send();
    }
}

