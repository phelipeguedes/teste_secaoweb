<?php 
	
	/* Incluindo os arquivos que estão no diretório vendor */
	require_once("vendor/autoload.php");
	/* API do Github */
	use Milo\Github;

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8"/>
 	<title>Listar Usuários</title>
 </head>
 <body>
 	<h1>Usuários do Github</h1>
 	<form action="https://api.github.com/users?since=xxx" method="GET">
 		<input type="submit" name="listar" value="Listar Usuários">
 	</form>
 </body>
 </html>