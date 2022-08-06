<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>BooksWeb Oficial</title>
  <link rel="stylesheet" type="text/css" href="css.css">
  <link rel="icon" type="image" href="logotipo.png">
</head>
<body>
  <div class = "quadrado4">

    <?php
        echo "<body><h1> Livro adicionado com sucesso!</h1></body>";

        $titulo = $_POST['titulo'];
        $genero = $_POST['genero'];
        $autor = $_POST['autor'];
        $ano = $_POST['ano'];
        $sinopse = $_POST['sinopse'];

        echo "<p><b> Título:</b> $titulo </p>";
        echo "<p><b> Gênero:</b> $genero </p>";
        echo "<p><b> Autor:</b> $autor </p>";
        echo "<p><b> Ano:</b> $ano </p>";
        echo "<p><b> Sinopse:</b> $sinopse </p>";

        $banco = new SQLite3("BDlivros.db");//criando o banco de dados

        $banco -> exec("CREATE TABLE IF NOT EXISTS livros(titulo TEXT, genero TEXT, autor TEXT, ano NUMBER, sinopse TEXT)");//criando a tabela 

        $variavel = $banco -> prepare ('INSERT INTO livros VALUES(?, ?, ?, ?, ?)');//outra forma de atribuir os valores a tabela
        $variavel  -> bindValue(1, $titulo, SQLITE3_TEXT);/*essa linha indica o parâmetro(1), o valor($titulo) e o tipo(SQLITE3_TEXT) e representa o que está recebendo a primeira ?, é um outro jeito de adicionar os valores a tabela*/
        $variavel -> bindValue(2, $genero, SQLITE3_TEXT);
        $variavel -> bindValue(3, $autor, SQLITE3_TEXT);
        $variavel -> bindValue(4, $ano, SQLITE3_TEXT);
        $variavel -> bindValue(5, $sinopse, SQLITE3_TEXT);

        $variavel -> execute();

        /*$banco1 -> exec("CREATE TABLE IF NOT EXISTS livros(genero TEXT)");
        $banco1 -> exec("CREATE TABLE IF NOT EXISTS livros(autor TEXT)");
        $banco1 -> exec("CREATE TABLE IF NOT EXISTS livros(ano NUMBER)");
        $banco1 -> exec("CREATE TABLE IF NOT EXISTS livros(sinopse TEXT)");

      $banco1 -> exec("INSERT INTO livros VALUES('" . $titulo . "')");//insere o dado na tabela
      $banco1 -> exec("INSERT INTO livros VALUES('" . $genero . "')");
      $banco1 -> exec("INSERT INTO livros VALUES('" . $autor . "')");
      $banco1 -> exec("INSERT INTO livros VALUES('" . $ano . "')");
      $banco1 -> exec("INSERT INTO livros VALUES('" . $sinopse . "')");
      $banco1 -> exec("INSERT INTO livros VALUES('". $titulo . "' , '" . $genero . "' , '" . $autor . "' , '" . $ano . "' , '" . $sinopse . "' )");*/ 

        ?>
        <a href = "tela3.html">Clique aqui para voltar ao menu</a>
  </div>
</body>
</html>
