<header>
    <figure>
        <img  style="float:left" src="../Imagens/logo.png" alt="logo" height="75px" width="90px" id="logo">
        <a href="Inicio.php"><img  style="float:right" src="../Imagens/botaoSair.png" alt="logo" id="sair"></a>
    </figure>      
    <nav>
        <ul>
            <li><a href="../PHP/index.php">Home</a></li>
            <li><a href="../PHP/Sobre.php">Sobre</a></li>
            <li><a href="../PHP/Carros.php">Carros<a/></li>
            <li><a href="../PHP/Tops.php">Tops</a></li>
            <li><a href="../PHP/Historia.php">Historia</a></li>
            <li><a href="../PHP/Contato.php">Contato</a></li>
        </ul>
    </nav>      
</header>
        
<h2 class="new">Notícia</h2>
<article class="new">
    <h3>Audi revela versão conversível (e esportiva) do A5</h3>
    <figure class="foto">
        <img  width="620px"  src="../Imagens/carro2.jpg" alt="carro.audi"/>
    </figure>
    <p>A Audi revela o A5 Cabrio, versão conversível do modelo. O modelo estará à venda na Europa em abril, com motores diesel e gasolina, com potências entre 190 cv e 345 cv – este na versão esportiva S5 Cabrio.
Com 4,67 metros de comprimento, o modelo ficou 5 centímetros maior do que o antecessor. Segundo a marca alemã, o interior ficou maior, tanto no que diz respeito a espaço para os ombros quanto para as pernas dos ocupantes do banco traseiro.</p>
</article>
<article class="form">
    <?php
        $link = mysql_connect("127.0.0.1","root","","autocarnews");
        $banco =  mysql_select_db("autocarnews")
    ?>
    <form  method="POST" action="#">
        <p><label for="nome"> Nome:</label>
        <input type="text" name="nome" id="nome"/></p>
         
        <p><label for="comentario"> Comente Aqui:</label></br>
        <textarea name="comentario" id="comentario" size="50"></textarea></p>
             
        <input type="submit" value="Enviar"/>
    </form>
    <hr>
    <?php
        $nome = $_POST['nome'];
        $data = date("Y/m/d");
        $comentario = $_POST['comentario'];
        if(strlen($nome = $_POST['nome'])){
            $resultado = mysql_query("INSERT INTO comentario2(data, nome, comentario) VALUES('".$data."','".$nome."', '".$comentario."')");
        }
        $sql = "SELECT * from comentario2 ORDER BY  id desc";
        $executar = mysql_query($sql);
        while($exibir = mysql_fetch_array($executar)){
            echo $exibir['data'];
            echo "</br>";
            echo $exibir['nome'],":";
            echo "</br>";
            echo $exibir['comentario'];
            echo "</br><hr>";
        }
    ?>
</article>
<aside>
</aside>
<footer>
    <p><a href="http://facebook.com.br" target="_blank"><img src="../Imagens/Facebook.ico" alt="face" width="25px" height="25px"/>Facebook/autocarnews</a></p>
    <p><a href="http://twitter.com.br" target="_blank"><img src="../Imagens/Twitter.png" alt="face" width="25px" height="25px"/>Twitter/autocarnews</a></p>
    <p><a href="https://www.instagram.com/" target="_blank"><img src="../Imagens/instagram.png" alt="face" width="25px" height="25px"/>Instagram/autocarnews</a></p>
</footer>
        
