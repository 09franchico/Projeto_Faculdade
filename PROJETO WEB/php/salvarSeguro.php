<?php

include_once("conexao.php");
$nome = $_POST['nome'];
$sexo =$_POST['sexo'];
$email=$_POST['email'];
$telefone =$_POST['telefone'];
$whatsapp = $_POST['whats'];
$orcamento = $_POST ['orcamento'];
$ramo = $_POST ['ramo'];
$data = $_POST ['data'];

$sql = "insert into contrato (nome,sexo,email,telefone,whatsapp,orcamento,ramo,data) value ('$nome','$sexo','$email','$telefone','$whatsapp','$orcamento','$ramo','$data')";


$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close ($conexao);

?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pagina Seguros</title>
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
        <h3>seja bem vindo !</h3>
        <?php
        
        if($linhas==1){

            print " Contrato efetuado com sucesso, um corretor entrarar em contato ";
        }else{
            print "Cadastro não efetuado. Tente novamente!!";
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
 
