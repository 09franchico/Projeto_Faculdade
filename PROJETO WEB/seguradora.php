<?php
session_start();
include('verifica_login.php');

?>


<?php

include_once("php/conexao.php");


$sql = "select * from seguradora";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

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
            <div>
                <ul>
                     <li><a href="painel.php">INICIO</a></li>
                    <li><a href="dadoscliente.php">DADOS CLIENTES</a></li>
                    <li><a href="contratocliente.php">CONTRATOS CLINTES</a></li>
                    <li><a  href="seguradora.php">SEGURADORAS</a></li>
                </ul>
            </div>
        </div>
    </div>
  <div class="principal">
  <br>
       <?php
            print "<h2 class='registro'>$registros registos encontrados</h2>";
            print"<hr>";

            while($exibirRegistros = mysqli_fetch_array($consulta)){
 
             $codigo = $exibirRegistros[0];
             $susep = $exibirRegistros[1];
             $nome = $exibirRegistros[2];
             $endereco = $exibirRegistros[3];
             $cnpj =  $exibirRegistros[4];
            

             print"<article id='seguradora'>";
             print "<h3>Codigo: $codigo</h3><br>";
             print "<nome>Susep: $susep</nome><br>";
             print "<nome>Nome: $nome</nome><br>";
             print "<nome>Endereço: $endereco</nome><br>";
             print "<nome>CNPJ: $cnpj</nome><br>";
             print"</article>";
             print"<hr>";
            }

             mysqli_close($conexao);

        ?>
         
    </div>
    
</body>
</html>