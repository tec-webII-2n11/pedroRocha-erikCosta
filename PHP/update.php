<?php
    include "conecta_mysql.php";
    $nome = $_POST['nome'];
    $senha = sha1($_POST['senha']);
    $email = $_POST['email'];
    $login = $_POST['login'];
    $resultado = mysqli_query($conexao, "UPDATE cadastro SET nome='$nome',senha='$senha',email='$email' WHERE login='$login'") or die ("Nao foi possivel conectar a SQL:".mysqli_error($conexao));
    
    if ($resultado == TRUE){
        echo "<br/>Usuario alterado com sucesso";
    }else{
        echo "<br/> Erro na atualização";
    }
    
    
    mysqli_close($conexao);



?>

<!doctype html>
<html>
    <header>
        
    </header>
    <body>
        <a href="paginaADM.php">Voltar</a>
    </body>
</html>