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
    
<h2 class="historia">HISTÓRIA</h2>
<article class="hist">
    <h3>Nossa História</h3>
    <p>Auto Car News é um website criado em 2016 composto por três jovens apaixonados pelo mundo automotivo, e que gostariam de mostrar aos internautas brasileiros a diviversidade de automóveis pelo mundo através de um caminho rápido e fácil que é este website. Esses três jovens se reuniram e discutiram uma melhor forma para levar as informações automotivas para a população. Eles chegaram a a cogitar um programa de TV, mas quando pesquisaram e perceberam que os custos para ter e manter um programa de televisão é muito auto. Sendo assim a melhor ideia que eles tiveram foi criar um website recheado de informações automotivas.</p>
    <p><a href="../PHP/Sobre.html">Para saber um pouco mais sobre nós, Clique Aqui.</a></p>
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
            $resultado = mysql_query("INSERT INTO comentarioHistoria(data, nome, comentario) VALUES('".$data."','".$nome."', '".$comentario."')");
        }
        $sql = "SELECT * from comentarioHistoria ORDER BY  id desc";
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
<footer>
    <p><a href="http://facebook.com.br" target="_blank"><img src="../Imagens/Facebook.ico" alt="face" width="25px" height="25px"/>Facebook/autocarnews</a></p>
    <p><a href="http://twitter.com.br" target="_blank"><img src="../Imagens/Twitter.png" alt="face" width="25px" height="25px"/>Twitter/autocarnews</a></p>
    <p><a href="https://www.instagram.com/" target="_blank"><img src="../Imagens/instagram.png" alt="face" width="25px" height="25px"/>Instagram/autocarnews</a></p>
</footer>