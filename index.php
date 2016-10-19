<?php 

	/* Incluindo os arquivos que estão no diretório vendor */
	require_once("vendor/autoload.php");
	/* API do Github */
	use Milo\Github;	

?>

<!DOCTYPE html> 
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
	<title>Pesquisar Usuário(a)</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<header>
		<div class="panel panel-default">
			<div class="panel-body">
				SEÇÃO WEB - API GITHUB				
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>				
			</div>	
		</div>
	</header>

	<div class="container-fluid">
		
		<!-- 'q' recebe o nome a ser pesquisado -->
		<form class="form-horizontal" action="https://api.github.com/search/users?q=<?php $q ?>" method="GET"> 
			<div class="form-group">
				<label class="control-label col-sm-1" for="nome">Usuário(a):</label>
				<div class="col-sm-3">
					<input type="text" name="q" class="form-control" id="nome" placeholder="Procurar no github" required />	
				</div>				
			</div>			
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-6">
					<button class="btn btn-default" type="submit" name="">Buscar</button>	
				</div>			
			</div>	
		</form>
		
	</div>
</body>
</html>