<header>
    <figure>
        <img  style="float:left" src="../Imagens/logo.png" alt="logo" height="75px" width="90px" id="logo">
        <a href="Inicio.php"><img  style="float:right" src="../Imagens/botaoSair.png" alt="logo" id="sair"></a>
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
    <h3>Montadoras lutam para fazer motor a combustão sobreviver; Brasil tem etanol</h3>
    <figure id="foto">
        <img  width="704px"  src="../Imagens/carro3.png" alt="motor.carro"/>
    </figure>
    <p>Nada como uma “ameaça” de médio ou longo prazo a qualquer negócio para chacoalhar a criatividade humana. No caso de propulsão veicular o esforço técnico aumenta muito e, acima de tudo, os investimentos em pesquisa e desenvolvimento. O Brasil também precisa entrar nesse esforço mundial. Em 2030 terá que importar 400 mil barris/dia de gasolina, três vezes mais do que hoje, mesmo sendo exportador líquido de petróleo. Etanol pode ser trunfo.
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
            $resultado = mysql_query("INSERT INTO comentario3(data, nome, comentario) VALUES('".$data."','".$nome."', '".$comentario."')");
        }
        $sql = "SELECT * from comentario3 ORDER BY  id desc";
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