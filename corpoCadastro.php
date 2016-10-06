<header>
    <figure>
        <img  style="float:left" src="logo.png" alt="logo" height="75px" width="90px" id="logo">
    </figure>      
    <nav>
        <h1>CADASTRO</h1>
    </nav>      
</header>
<article class="form">
		
        <form  method="POST" action="validaCadastro.php">
        <p><label for="nome"> Nome Completo:</label>
        <input type="text" name="nome" id="nome" size="30" /></p>
         
        <p><label for="username"> Nome de Usuário:</label>
        <input type="text" name="username" id="username" size="30" /></p>
         
        <p><label for="email"> E-MAIL:</label>
        <input type="email" name="email" id="email" size="20" /></p>
        
        <p><label for="cemail"> Confirmar E-MAIL:</label>
        <input type="email" name="cemail" id="cemail" size="20" /></p>
        
        <p><label for="senha"> Senha:</label>
        <input type="password" name="senha" id="senha" size="20" /></p>
        
        <p><label for="csenha"> Confirmar Senha:</label>
        <input type="password" name="csenha" id="csenha" size="20" /></p>
         
        <label for ="sexo">SEXO:</label>
        <select name="sexo">
            <option>Selecione o Sexo</option>
            <option>Masculino</option>
            <option>Feminino</option>
        </select>
           </p>
           <p><label for ="dataNasc">Data de Nascimento</label>
        <input type="date" name="dataNasc" id="dataNasc"/></p>
        
        <p><label for="estado">Estado que voce mora</label>
        <select name="estado">
            <option>SP</option>
            <option>RJ</option>
            <option>MG</option>
            <option>Outros</option>
        </select>
        </p>
        <p><label for = "Cidade">Cidade</label>
        <select name="cidade">
            <option>SP</option>
            <option>RJ</option>
            <option>MG</option>
        </select></p>
        <input type="image" src="BotaoCadastro.png" alt="submit"/>
    </form>
</article>
<footer>
        <p><a href="http://facebook.com.br" target="_blank"><img src="Facebook.ico" alt="face" width="25px" height="25px"/>Facebook/autocarnews</a></p>
        <p><a href="http://twitter.com.br" target="_blank"><img src="Twitter.png" alt="face" width="25px" height="25px"/>Twitter/autocarnews</a></p>
        <p><a href="https://www.instagram.com/" target="_blank"><img src="instagram.png" alt="face" width="25px" height="25px"/>Instagram/autocarnews</a></p>
</footer>