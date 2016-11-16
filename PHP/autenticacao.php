<script type="text/javascript">
            function loginsucessfully(){
                setTimeout("window.location='index.php'",2000);
                alert('Usuário autenticado com sucesso');
            }
            function loginfailed(){
                setTimeout("window.location='login.php'",2000);
                alert('Login falhou, usuário ou senha incorreto');
            }
            
            function admLogin(){
                setTimeout("window.location='paginaADM.php'",2000);
                alert('Bem vindo administrador !!');
            }
        </script>
    </header>
    <body>
   
        <?php
            include 'conecta_mysql.php';
    
            $login  = strip_tags($_POST['login']);
            $senha =  md5(strip_tags($_POST['senha']));
            $sql = mysqli_query($conexao, "SELECT * FROM cadastro WHERE login = '$login' and senha = '$senha'") or die (mysql_error());
            $row = mysqli_num_rows($sql);
            
            if ($login == "adm"){
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['senha'] = $_POST['senha'];
                echo "<script>admLogin()</script>";

            }
            
            if ($login != "adm"){
                 session_start();
                 $_SESSION['login'] = $_POST['login'];
                 $_SESSION['senha'] = $_POST['senha'];
                 
                 echo "<script>loginsucessfully()</script";
        } 
        
        
        ?>
    </body>
</html>