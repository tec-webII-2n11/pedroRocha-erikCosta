<!doctype html>
<html>
    <body>
        <?php
            include "conecta_mysql.php";
            
            $nome = $_POST['nome'];
            $senha = sha1($_POST['senha']);
            $email = $_POST['email'];
            $login = $_POST['login'];
            $resultado = mysqli_query($conexao,"INSERT INTO cadastro(nome, senha, email, login) VALUES('".$nome."', '".$senha."', '".$email."', '".$login."')") or die ("Não foi possível executar a SQL:".mysqli_error($conexao));
            if($resultado == TRUE){
                echo "<script>alert('Cadastro Efetuado com Sucesso!!!);</script>";
                header('Location:login.php');
            } else {
                echo "<br/> Erro na inserção";
            }
        
            mysqli_close($conexao);
        ?>
    </body>
</html>