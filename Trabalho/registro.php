<?php 

$metodo = $_SERVER['REQUEST_METHOD'];

//verifica se a requisição é do tipo POST
if ($metodo === 'POST'){
	$name = $_POST['usuario_register'];
	$password = $_POST['senha_register'];

	//ter uma conexão com o banco
	$conexao = new SQLite3('./bancoUsuarios.db');

	//2 - ter uma tabela para salvar os dados 
	$table = "CREATE TABLE IF NOT EXISTS usuarios (nome TEXT, senha TEXT);";
	$conexao -> exec($table); 

  //para caso tente cadastrar um usuário já existente no banco
  $consulta = "SELECT * FROM usuarios WHERE nome = '$name'"; //especifica que é a tabela usuarios
  $resultado = $conexao -> query($consulta);

if($linha = $resultado -> fetchArray()){
   header('Location:failed.html');
   die();
}

	//3 - salvar os dados 
	$insert = "INSERT INTO usuarios (nome, senha) VALUES('" . $name . "', '" . $password . "');";
	
	$conexao -> exec($insert);

    header('Location: tela2.html');


    //encerra a execução do script
	exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BooksWeb Oficial</title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="icon" type="image" href="logotipo.png">

  </head>
  <body>
    <div class = "quadrado_login">
        <h1>Faça seu cadastro</h1>
      <form action = "" method = "POST">
        <label for="input_usuario">Usuário</label>
        <br>
        <input type="text" name="usuario_register" placeholder="Digite seu usuario">
        <br>
        <label for="input_senha">Senha</label>
        <br>
        <input type="password" name="senha_register" placeholder="Digite sua senha">
        <br>
        <button>Enviar</button>
        </div>
      </form>
    
  </body>
</html>
