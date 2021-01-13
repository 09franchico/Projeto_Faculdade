<?php
session_start();
include('verifica_login.php');

?>


<?php

include_once("php/conexao.php");


$sql = "select * from cliente";
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

    <table border="1">
         <tr>
             <th class="codigo">Codigo</th>
             <th class="nome">Nome</th>
             <th class="sexo">Sexo</th>
             <th class="email">Email</th>
             <th class="telefone">Telefone</th>
             <th class="whatsapp">Whatsapp</th>
             <th>Apagar</th>
         </tr>
         <?php  while($exibirRegistros = mysqli_fetch_array($consulta)){ ?>
            <?php 
                $codigo = $exibirRegistros[0];
                $nome = $exibirRegistros[1];
                $sexo = $exibirRegistros[2];
                $email = $exibirRegistros[3];
                $telefone =  $exibirRegistros[4];
                $whatsapp =  $exibirRegistros[5];
                
            ?>
         <tr>
             <td><?php print"$codigo" ;?></td>
             <td><?php print"$nome";?></td>
             <td><?php print"$sexo";?></td>
             <td><?php print"$email";?></td>
             <td><?php print"$telefone";?></td>
             <td><?php print"$whatsapp";?></td>
             <td><?php print"<a href='apagarcliente.php?id=".$codigo."'>Excluir</a>"?></td>
         </tr>
         <?php }
         mysqli_close($conexao);
         ?>
    </table>
    
         
            
  </div>
    
</body>
</html>
