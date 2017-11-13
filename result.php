<html>
   
    <head>
    <title>Resultado</title>
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
    
<body background="back.png">

    <?php
    
 $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cadastro";
    $conexao = mysqli_connect($host,$user,$password,$database);
    if(mysqli_connect_errno()){
        echo "ERRO NA CONEXÃO COM O BANCO DE DADOS. ".mysqli_connect_error();
    }
    
    $buscar=$_POST['buscar'];
    
    $sql = mysqli_query($conexao,"SELECT * FROM musica WHERE nomeMusica LIKE '%".$buscar."%'");

    $row = mysqli_num_rows($sql);
    if ($row > 0){
        while($linha = mysqli_fetch_array($sql)){
            $nomeMusica = $linha['nomeMusica'];
            $nomeCantor = $linha['nomeCantor'];
            $nomeLink = $linha['nomeLink'];
            echo "<strong>Musica: </strong>".@$nomeMusica;
            echo "<br/>";
            echo "<strong>Cantor: </strong>".@$nomeCantor;
            echo "<br/>";
            echo "<strong>Escute: </strong>".@$nomeLink;
            echo "<br/>";
        }
    }else{
        echo "Nenhuma Musica Encontrada";
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