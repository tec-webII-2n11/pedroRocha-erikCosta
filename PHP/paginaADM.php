<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="Author" content="Erik Costa Souza - 31660444"/>
        <meta name="Author" content="Pedro Henrique Rocha - 31610714"/>
        <title>Pagina Administrador</title>
        <link href="../CSS/crudADM.css" rel="stylesheet">
    </head>
    <body>
        <article class="form">
            <img  style="float:left" src="../Imagens/logo.png" alt="logo" height="90px" width="125px" id="logo"></br>
            <form id="crud" method="POST" action="crud.php">
                <input type="radio" name="tipoCRUD" value="C" checked />CREATE</br>
                <input type="radio" name="tipoCRUD" value="R"/>READ</br>
                <input type="radio" name="tipoCRUD" value="U" />UPDATE</br>
                <input type="radio" name="tipoCRUD" value="D" />DELETE</br>
                <input type="submit" value="START"/>
            </form>
        </article>
    </body>
</html>