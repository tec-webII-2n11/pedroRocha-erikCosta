<!doctype html>
<html>
    <body>
        <?php
            include "conecta_mysql.php";
            
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $email = $_POST['email'];
            $mensagem = $_POST['mensagem'];
            $resultado = mysqli_query($conexao,"INSERT INTO contato(nome, sobrenome, cidade, estado, email, mensagem) VALUES('".$nome."', '".$sobrenome."', '".$cidade."', '".$estado."', '".$email."', '".$mensagem."')") or die ("Não foi possível executar a SQL:".mysqli_error($conexao));
            if($resultado == TRUE){
                echo 'Mensagem enviada com Sucesso!!! Em breve retornaremos uma resposta.';
            } else {
                echo 'Erro ao enviar Mensagem. Tente Novamente!';
            }
        
            mysqli_close($conexao);
        ?>
    </body>
</html>