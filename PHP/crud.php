<!DOCTYPE html>
<html>
    <head>
        <title>CRUD</title>
        <meta charset="utf-8"/>
        <link href="../CSS/crudADM.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $opcao = $_POST['tipoCRUD'];
            switch ($opcao){
                case 'C':
                    $formulario = "<article class='form'>
                                   <img  style='float:left' src='../Imagens/logo.png' alt='logo' height='90px' width='125px' id='logo'></br>
                                   <form id='create' action ='criar.php' method='POST'>
                                        Login: <input type='text' name='login' /><br/>
                                        Senha: <input type='text' name='senha' /><br/>
                                        Email: <input type='text' name='email' /><br/>
                                        Nome: <input type='text' name='nome' /><br/>
                                        <input type='submit' value='INSERIR' />
                                    </form>
                                    </article>";
                    break;
            
                case 'R':
                    $formulario = "<article class='form'>
                                   <img  style='float:left' src='../Imagens/logo.png' alt='logo' height='90px' width='125px' id='logo'></br>
                                    <form id='read' action='read.php' method='POST'>
                                        <input type='submit' value='BUSCAR' />
                                    </form>
                                    </article>";
                    break;
            
                case 'U':
                    $formulario = "<article class='form'>
                                   <img  style='float:left' src='../Imagens/logo.png' alt='logo' height='90px' width='125px' id='logo'></br>
                                    <form id='update' action ='update.php' method='POST'>
                                        Nome: <input type='text' name='nome' /><br/>
                                        Senha: <input type='text' name='senha' /><br/>
                                        Email: <input type='text' name='email' /><br/>
                                        Login: <input type='text' name='login' /><br/> 
                                        <input type='submit' value='ATUALIZAR' />
                                    </form>
                                    </article>";
                    break;
        
                case 'D';
                    $formulario = "<article class='form'>
                                   <img  style='float:left' src='../Imagens/logo.png' alt='logo' height='90px' width='125px' id='logo'></br>
                                    <form id='delete' action='delete.php' method='POST'>
                                        Login: <input type='text' name ='login' /><br/>
                                        <input type='submit' value='APAGAR' />
                                    </form>
                                    </article>";
                    break;
                        
            }
    
            echo $formulario;
        ?>
    </body>
</html>