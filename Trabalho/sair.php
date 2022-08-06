<?php

session_start();//inicia a sessão para recuperar ela e poder destrui-la

echo "<p>".$_SESSION['usuario']."</p>";

session_unset();//limpa as variáveis da seção

echo "<p>".$_SESSION['usuario']."</p>";

header('Location:tela1.html');