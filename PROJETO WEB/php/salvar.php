<?php

include_once("conexao.php");
$nome = $_POST['nome'];
$sexo =$_POST['sexo'];
$email=$_POST['email'];
$telefone =$_POST['telefone'];
$whatsapp = $_POST['whats'];

$sql = "insert into cliente (nome,sexo,email,telefone,whatsapp) value ('$nome','$sexo','$email','$telefone','$whatsapp')";

$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close ($conexao);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pagina Auto</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <!--banner e menu-->
    <div class="bannercontato">
        <div class="container">
            <div class="menu">
             <ul>
                 <li><a class="mn" href="../index.html">página inicial</a></li>
                 <li><a class="mn" href="../pagina quem somos.html">o que nós somos</a></li>
                 <li><a class="mn" href="../pagina contato.html"><img src="../img/contato.png"  height="20px" width="20px" alt="">&ensp;contato</a></li>
                 <li class="ativo"><a class="mn" href="../login.php"><img class="espaco" src="../img/loguin.png" height="20px" width="20px" alt="">&ensp;loguin</a></li>
             </ul>
            </div>

        </div>
    </div>
    <!--cliente-->
    <div id="descricaoauto">
        <h3>Entraremos em contato!</h3>
      
     <?php
        
        if($linhas==1){
            print " Cadastro efetuado com sucesso";
        }else{
            print "Cadastro não efetuado !! Tente novamente";
        }


    ?>
        
       
    </div>

    </div>
    <!--footer-->
    <div class="rodape">
        <ul>
            <li><a class="footer" href="https://www.facebook.com/"><img src="../img/facebook.png" height="50px" width="50px" alt=""></a></li>
            <li><a class="footer" href="https://twitter.com/"><img src="../img/twitter.png" height="50px" width="50px" alt=""></a></li>
            <li><a class="footer" href="https://www.instagram.com/"><img src="../img/instagran.png" height="50px" width="50px" alt=""></a></li>

    </div>
    
</body>
</html>