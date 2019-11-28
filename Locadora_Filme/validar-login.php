<?php
$usuario = $_POST['email'];
$senha = $_POST['senha'];

if($usuario == 'abhner' && $senha == '123'){
    header('Location:painel.php');
}else{
    echo "Usuário ou senha incorreto!";
}

?>