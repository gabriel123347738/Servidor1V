<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <title>BooksWeb Oficial</title>
	 <link rel="stylesheet" type="text/css" href="css.css">
   	<link rel="icon" type="image" href="logotipo.png">
   </head>
<body>
	<div class = "quadrado9">
	<h1>Feedbacks cadastrados</h1>
	<?php
		$banco = new SQLite3("BDfeedbacks.db");

		$exibe_dados = $banco -> query("SELECT * FROM feedbacks");

	   while($value = $exibe_dados -> fetchArray()){
		   echo "<p><b>Título:</b>" . $value['titulo'] . "</p><hr>";
		   echo "<p><b>Comentário:</b>" . $value['feedback'] . "</p><hr>";
		   
	   }
	 ?>
	 <a href = "tela3.html">Clique aqui para voltar ao menu</a>
	</div>
</body>
</html>