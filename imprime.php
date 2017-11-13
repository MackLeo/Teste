<html>
   
    <head>
    <title>Imprime</title>
    </head>
    
<body>
    
    
    <?php
    
 $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cadastro";
    $conexao = mysqli_connect($host,$user,$password,$database);
    if(mysqli_connect_errno()){
        echo "ERRO NA CONEXÃO COM O BANCO DE DADOS. ".mysqli_connect_error();
    }
    
    
    
    $selecao = mysqli_query($conexao,"SELECT * FROM musica");
    
    while($linha = mysqli_fetch_array($selecao)){
    
    echo $linha['nomeMusica'].'<br/>';
    echo $linha['nomeCantor'].'<br/>';
    echo $linha['nomeLink'].'<br/>';

    }
        
    ?>
    
    
    
    
    </body>
</html>