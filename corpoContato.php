 <header>
            <figure>
                <img  style="float:left" src="logo.png" alt="logo" height="75px" width="90px" id="logo">
                <a href="Inicio.php"><img  style="float:right" src="botaoSair.png" alt="logo" id="sair"></a>
            </figure>      
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Sobre.php">Sobre</a></li>
                    <li><a href="Carros.php">Carros<a/></li>
                    <li><a href="Tops.php">Tops</a></li>
                    <li><a href="Historia.php">Historia</a></li>
                    <li><a href="Contato.php">Contato</a></li>
                </ul>
            </nav>      
        </header> 
        <article class="formulario">
            <h3>Entre em contato conosco:</h3>
            <form name="form" method="post" onSubmit="return validacao();">
                <label class="preencher">Nome: </label><input type="text" name="nome" /> <br>
                <label class="preencher">Sobrenome: </label><input type="text" name="sobrenome" /><br>
                <label class="preencher">Cidade: </label><input type="text" name="cidade" /> <br>
                <label class="preencher">Estado: </label><input type="text" name="estado" /> <br>
                <label class="preencher">E-mail: </label><input type="text" name="email" /> <br>
                Deixe sua mensagem:<br><textarea rows="10" cols="30"></textarea><br>
                <input type="submit" name="submit" value="Enviar">
            </form>
        </article>
            <article class="redes">
                <h3>Encontre-nos nas redes sociais:</h3>
                <figure>
                    <p><a href="http://facebook.com.br" target="_blank"><img src="facebook.png" width="25px" height="25px" alt="link_logo_facebook">Facebook/autocarnews</a></p>        
                </figure>
                <figure>
                    <p><a href="http://twitter.com.br" target="_blank"><img src="twitter-logo.png" width="25px" height="25px" alt="link_logo_facebook">Twitter/autocarnews</a></p>
                </figure>
                <figure>
                    <p><a href="https://www.linkedin.com/" target="_blank"><img src="linkedin.png" width="25px" height="25px" alt="link_logo_facebook">Linkedin/autocarnews</a></p>
                </figure>
                <figure>
                    <p><a href="https://myspace.com/" target="_blank"><img src="myspace.png" width="25px" height="25px" alt="link_logo_facebook">MySpace/autocarnews</a></p>
                </figure>
                <figure>
                    <p><a id="tumblr" href="https://www.tumblr.com" target="_blank"><img src="tumblr.png" width="27px" height="27px" alt="link_logo_facebook">Tumblr/autocarnews</a></p>
                </figure>
        </article>
        <footer>
            <p><a href="http://facebook.com.br" target="_blank"><img src="Facebook.ico" alt="face" width="25px" height="25px"/>Facebook/autocarnews</a></p>
            <p><a href="http://twitter.com.br" target="_blank"><img src="Twitter.png" alt="face" width="25px" height="25px"/>Twitter/autocarnews</a></p>
            <p><a href="https://www.instagram.com/" target="_blank"><img src="instagram.png" alt="face" width="25px" height="25px"/>Instagram/autocarnews</a></p>
        </footer>