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
<h2 class="tops">TOPS</h2>
<section>
    <article class="topvendas"><h3>TOP VENDAS</h3>
        <img src="../Imagens/topvendas.jpg" alt="topvendas" height="85px" width="130px">
        <p>Encontre os carros mais vendidos</p>
        <p><a href="http://quatrorodas.abril.com.br/materia/os-50-automoveis-mais-vendidos-em-2016-ate-agora" target="_blank">Clique Aqui</a></p>
    </article>
    <article class="topdelinha"><h3>TOP DE LINHA</h3>
        <img src="../Imagens/topdelinha.jpg" alt="topdelinha" height="85px" width="130px">
        <p>Encontre os melhores carros do mercado</p>
        <p><a href="http://exame.abril.com.br/estilo-de-vida/noticias/12-modelos-de-carros-que-ja-ganharam-versoes-2016" target="_blank">Clique Aqui</a></p>
    </article>
    <article class="topmaisrapido"><h3>TOP MAIS RÁPIDOS</h3>
        <img src="../Imagens/topmaisrapido.jpg" alt="topmaisrapido" height="85px" width="130px">
        <p>Aqui você encontra os carros mais rápidos</p>
        <p><a href="http://top10mais.org/top-10-carros-mais-rapidos-do-mundo/" target="_blank">Clique Aqui</a></p>
    </article>
    <article class="topmaisforte"><h3>TOP MAIS FORTES</h3>
        <img src="../Imagens/topmaisforte.jpg" alt="topdelinha" height="85px" width="130px">
        <p>Veja os carros com maiores potencias</p>
        <p><a href="http://manualdohomemmoderno.com.br/carros/10-melhores-muscle-cars-os-roncos-mais-fortes-e-carros-mais-potentes" target="_blank">Clique Aqui</a></p>
    </article>
</section>
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
            $resultado = mysql_query("INSERT INTO comentarioTops(data, nome, comentario) VALUES('".$data."','".$nome."', '".$comentario."')");
        }
        $sql = "SELECT * from comentarioTops ORDER BY  id desc";
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