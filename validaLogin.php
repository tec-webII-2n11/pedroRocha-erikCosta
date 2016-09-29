<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
</html>
<?php
$username = $_POST['username'];
$senha = $_POST['senha'];
$erro = 0;

if (empty($username) OR strstr($username < 5)){
    echo "<script> alert('Nome de Usuário Inválido!')</script>";
    $erro = 1;
}
if (empty($senha) OR strstr($senha < 5)){
    echo "<script> alert('Senha Inválido!')</script>";
    $erro = 1;
}
if($erro == 0){
    echo "<script> alert('Login Efetuado com Sucesso!!!')</script>";
}

?>