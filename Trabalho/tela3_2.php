<!DOCTYPE html>
<html>
  <head>
	    <meta charset="utf-8">
	    <title>BooksWeb Oficial</title>
	    <link rel="stylesheet" type="text/css" href="css.css">
    	<link rel="icon" type="image" href="logotipo.png">
   </head>
   <body>
   	<div class = "quadrado5">
   		<h1>Livros cadastrados</h1>
		<?php

		$banco = new SQLite3("BDlivros.db");

		 $exibe_dados = $banco -> query("SELECT * FROM livros");

		while($value = $exibe_dados -> fetchArray()){
			echo "<p><b>Título:</b>" . $value['titulo'] . "</p><hr>";
			echo "<p><b>Gênero:</b>" . $value['genero'] . "</p><hr>";
			echo "<p><b>Autor:</b>" . $value['autor'] . "</p><hr>";
			echo "<p><b>Ano:</b>" . $value['ano'] . "</p><hr>";
			echo "<p><b>Sinopse:</b>" . $value['sinopse'] . "</p><hr>";
			

		}
		?>
		<a href = "tela3.html">Clique aqui para voltar ao menu</a>
	</div>
</body>