<header>
    <figure>
        <img  style="float:left" src="../Imagens/logo.png" alt="logo" height="75px" width="90px" id="logo">
        <a href="../PHP/index.php"><img  style="float:right" src="../Imagens/botaoSair.png" alt="logo" id="sair"></a>
    </figure>      
    <nav>
        <ul>
            <li><a href="../PHP/Inicio.php">Home</a></li>
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
    <h3>Tesla Model S já está sendo vendido no Brasil por R$ 650 mil</h3>
    <figure id="foto">
        <img  width="774px"  src="../Imagens/carro1.jpg" alt="carro.Tesla"/>
    </figure>
    <p>Um dos carros elétricos mais comentados da atualidade, o Tesla Model S, estava confirmado como uma das atrações para o Salão do Automóvel. Mas nesta sexta-feira (4), a revista Forbes divulgou que o sedã  já está à venda em São Paulo (SP) na loja da empresa Elektra.
    Dependendo da versão, o Model S é capaz de rodar até 435 km antes de precisar ser recarregado. Além disso, a potência gerada pelo motor elétrico rende o equivalente a 329 cavalos, o que garante aceleração de 0 a 100 km/h em 4,5 segundos e velocidade máxima de 240 km/h.</p>
        
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
            $resultado = mysql_query("INSERT INTO comentario(data, nome, comentario) VALUES('".$data."','".$nome."', '".$comentario."')");
        }
        $sql = "SELECT * from comentario ORDER BY  id desc";
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