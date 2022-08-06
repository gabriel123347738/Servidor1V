<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	 <title>BooksWeb Oficial</title>
  	<link rel="stylesheet" type="text/css" href="css.css">
 	 <link rel="icon" type="image" href="logotipo.png">
</head>
<body>
	<div class = "quadrado8">

	<?php
		echo "<body><h1> Feedback adicionado com sucesso!</h1></body>";

		$titulo = $_POST['titulo'];
		$feedback = $_POST['feedback'];
	
		echo "<p><b> Título:</b> $titulo </p>";
		echo "<p><b> Feedback:</b> $feedback </p>";
		

		$banco = new SQLite3("BDfeedbacks.db");//criando o banco de dados

		$banco -> exec("CREATE TABLE IF NOT EXISTS feedbacks(titulo TEXT, feedback TEXT)");//criando a tabela 

		$variavel = $banco -> prepare ('INSERT INTO feedbacks VALUES(?, ?)');//outra forma de atribuir os valores a tabela
		$variavel  -> bindValue(1, $titulo, SQLITE3_TEXT);/*essa linha indica o parâmetro(1), o valor($titulo) e o tipo(SQLITE3_TEXT) e representa o que está recebendo a primeira ?, é um outro jeito de adicionar os valores a tabela*/
		$variavel -> bindValue(2, $feedback, SQLITE3_TEXT);

		$variavel -> execute();

		?>
		<a href = "tela3.html">Clique aqui para retornar ao menu</a>
	</div>
</body>
</html>