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
<h2 class="sobre">SOBRE</h2>  
<section>
    <article class="quem">
        <h3>Quem Somos:</h3>
        <p>Auto Car News é um site composto por três gênios do mundo automotivo: Erik Costa Souza, Osniel Lopes Teixeira e Pedro Henrique Rocha, com o intuito de trazer a melhor informação , com rapidez aos nossos internautas . O objetivo desse site é trazer toda a informação automotiva do mundo desde “rachas” até salões automotivos. E com o diferencial de trazer as melhores informações da rua, como corridas e campeonatos amadores de São Paulo.</p>
    </article>
    <h3>Nossa Missão:</h3>
    <p>Quremos informar e atualizar os nossos internautas, com a melhor qualidade.</p>
    <h3>Nossos Valores:</h3>
    <ul>
        <li>Integridade</li>
        <li>Comprometimento</li>
        <li>Valorização humana</li>
        <li>Superação dos resultados</li>
        <li>Melhoria contínua</li>
        <li>Inovação</li>
        <li>Sustentabilidade</li>
    </ul>
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
            $resultado = mysql_query("INSERT INTO comentarioSobre(data, nome, comentario) VALUES('".$data."','".$nome."', '".$comentario."')");
        }
        $sql = "SELECT * from comentarioSobre ORDER BY  id desc";
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
    <p><img src="../Imagens/Facebook.ico" alt="face" width="25px" height="25px"/>Facebook/autocarnews</p>
    <p><img src="../Imagens/Twitter.png" alt="face" width="25px" height="25px"/>Twitter/autocarnews</p>
    <p><img src="../Imagens/instagram.png" alt="face" width="25px" height="25px"/>Instagram/autocarnews</p>
</footer>