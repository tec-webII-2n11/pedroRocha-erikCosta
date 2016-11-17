<?php
    include 'conecta_mysql.php';
    
    
    $resultado = mysqli_query($conexao, "SELECT * from cadastro") or die("Nao foi possivel retornar a SQL: ".mysqli_error($conexao));
    if ($resultado){
        while ($row = mysqli_fetch_array($resultado)){
            echo "NOME: ".$row["nome"]."-"."SENHA:".$row["senha"]."-"."EMAIL:".$row["email"]."-"."LOGIN".$row["login"]."<br/>";
        }
        
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