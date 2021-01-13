<?php
session_start();
include('verifica_login.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina admin</title>
    <link rel="stylesheet" href="css/estiloPainel.css">
</head>
<body>
    <div class="cabecalho">
        <h2>BEM VINDO!!<br>
        <?php echo $_SESSION['usuario'];?>
       </h2>
    
        <h2 class="sair"><a class="sair" href="logout.php">Sair</a></h2>

    </div>
    <div class="containerpainel">
       <div class="lista">
                <ul>
                    <li><a  href="painel.php">INICIO</a></li>
                    <li><a  href="dadoscliente.php">DADOS CLIENTES</a></li>
                    <li><a  href="contratocliente.php">CONTRATOS CLINTES</a></li>
                    <li><a  href="seguradora.php">SEGURADORAS</a></li>
                </ul>
        </div>
    </div>
   
</body>
</html>