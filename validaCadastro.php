<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
</html>

<?php
$nome = $_POST["nome"];
$username = $_POST['username'];
$email = $_POST['email'];
$cemail = $_POST['cemail'];
$senha = $_POST['senha'];
$csenha = $_POST['csenha'];
$sexo = $_POST['sexo'];
$data = $_POST["dataNasc"];
$erro = 0;



if (empty($nome) OR strstr($nome, ' ')==FALSE){
    echo "<script> alert('Nome inválido!')</script>";
    $erro = 1;
}

if (empty($username) OR strstr($username < 5)){
    echo "<script> alert('Nome de Usuário Inválido!')</script>";
    $erro = 1;
}

if (empty($email) OR strstr($email, '@')==FALSE){
    echo "<script> alert('E-mail inválido!')</script>";
    $erro = 1;
}
if (empty($cemail) OR ($cemail == $email)){
    echo "<script> alert('O E-mail não está confirmado corretamente!')</script>";
    $erro = 1;
}
if (empty($senha) OR strstr($senha < 5)){
    echo "<script> alert('Senha Inválido!')</script>";
    $erro = 1;
}
if (empty($csenha) OR ($csenha == $senha)){
    echo "<script> alert('As senhas não Conferem!')</script>";
    $erro = 1;
}
if (empty($sexo)){
    echo "<script> alert('Sexo inválido!')</script>";
    $erro = 1;
}

if (empty($data)){
    echo "<script> alert('Data de nascimento inválida!')</script>";
    $erro = 1;
}
if($erro == 0){
    echo "<script> alert('Cadastro Efetuado com Sucesso!!!')</script>";
}

?>