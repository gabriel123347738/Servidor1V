<?php

//processar o form de login
$usuario = $_POST['input_usuario'];
$senha = $_POST['input_senha'];

//salvo o usuario na sessão
$_SESSION['user'] = $usuario;

$conexao = new SQLite3('bancoUsuarios.db');//conexao com o banco
$consulta = "SELECT * FROM usuarios"; //especifica que é a tabela usuarios
$resultado = $conexao -> query($consulta);

//verificando se existe esse usuário no banco
while($linha = $resultado -> fetchArray()){
  $usuario = $linha['nome'];
  
    header('Location:tela3.html');

}
?>
