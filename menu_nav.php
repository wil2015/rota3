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
  
      
      <!-- Bootstrap CSS File  -->
  



</head>
<body >

<!-- Inicio navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Rota Alimentar</a>
    </div>
    <ul class="nav navbar-nav">
     	<li class="active"><a href="#">Home</a></li>
	      <?php 
	      /*		if ($_SESSION['sessao_tipo_loja'] == 5){}elseif ($_SESSION['sessao_tipo_loja'] == 1) {
		      echo '<li><a href="administracao.php?link=1">Comprar</a></li>';} else {
		      echo '<li><a href="administracao.php?link=7">Comprar</a></li>';} */
		      switch ($_SESSION['sessao_tipo_loja']) {
		      
		      	case 1:
		  		    echo '<li><a href="administracao.php?link=1">Comprar</a></li>';  /* compras para a industria */
		      		break;
		      	case 4:
		      		 echo '<li><a href="administracao.php?link=4">Comprar</a></li>'; /* compras para o mercado */
		      		break;
		      	case 5:																/* não tem compras para a fazenda */ 
		      		break;
		      	case 7:
		      		 echo '<li><a href="administracao.php?link=7">Comprar</a></li>'; /* compras para a pecuaria */
		      		break;
		      	default:
		      		break;
		      }
	      
	      ?>
	      
	      <li><a href="administracao.php?link=2">Meus Produtos</a></li>
	      <li><a href="administracao.php?link=3">Minhas Vendas</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
    </ul>
  </div>
</nav>
<!-- Fim navbar -->
