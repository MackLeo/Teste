<html>
   
    <head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="a.css">
    </head>
    
    <header>
    <br/>
    <br/>
    
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="teste.php">Envie Sua Musica</a></li>
    <li><a href="contato.php">Contato</a></li>
    <li><a href="sobre.php">Sobre</a></li>
    <li id="logo"><img src="logo.png" alt="logo" height="40" width="40"></li>
    </ul>
    <br/>
    <br/>
    
    </header>
    
<body>
    <br/>
    <form name="busca" method="post" action="result.php">
        <h3>Pesquisar Nome Musica:</h3> <input type="text" name="buscar" /> <input type="submit" value="Ir" />
    
    </form>
    
    <form name="busca1" method="post" action="result1.php">
        <h3>Pesquisar Nome do Cantor:</h3> <input type="text" name="buscar1" /> <input type="submit" value="Ir" />
    
    </form>
    <?php
    
 $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cadastro";
    $conexao = mysqli_connect($host,$user,$password,$database);
    if(mysqli_connect_errno()){
        echo "ERRO NA CONEXÃO COM O BANCO DE DADOS. ".mysqli_connect_error();
    }
    
    

    ?>
    
    
    
    
    </body>
    
    <footer>
        <img id="logo1" src="logo.png" alt="logo" height="50" width="50">
        <p><a href="teste.php">Cadastrar Musica</a></p>
        <p><a href="contato.php">Contato</a></p>
        <p><a href="sobre.php">Sobre</a></p>
        <p>Dedicate For N.H , 2017</p>
        
    </footer>
</html>