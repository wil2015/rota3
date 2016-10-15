<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Cesar">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Área para Usuário Cadastrado</title>
     <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     
        
      
  </head>

  <body>
	<?php
		unset($_SESSION['sessao_loja_id'],			
		      $_SESSION['sessao_nome_loja'], 		
		      $_SESSION['sessao_tipo_loja'], 
		      $_SESSION['sessao_login'], 		
		      $_SESSION['sessao_senha']); 
	?>


    <div class="container text-center pagination-centered">

   <h2 class="form-signin-heading text-center">Área para Usuário Cadastrado</h2>

   
    <div class="col-sm-4" ></div>
 		<div class="col-md-4">

          <form class="form-horizontal" method="POST" action="valida_login.php">
          
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Usuário</label>
            
                <input type="text" name="usuario" class="form-control" placeholder="Digitar o Usuário" required autofocus><br />
            </div>

            <div class="form-group">
                <label for="inputPassword" class="sr-only">Senha</label>
                
                <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required >
                
            </div>
            <button class="btn btn-primary btn-md" type="submit">Acessar</button>
            
          </form>

      </div>
            <p class="text-center text-danger">
              <?php
                if(isset($_SESSION['loginErro'])){
                  echo $_SESSION['loginErro'];
                  unset($_SESSION['loginErro']);
                }
              ?>
            </p>
      
      <div class="col-sm-4" ></div>
    </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
