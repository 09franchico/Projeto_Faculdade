<?php
session_start();
include('verifica_login.php');

?>


<?php

include_once("php/conexao.php");

$filtro = isset($_POST['filtro'])?$_POST['filtro']:"";

$sql = "select * from contrato where ramo like '%$filtro%'";
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
    <br>
    <br>
    <form class="formfiltro" action="" method="post">
        Filtrar por seguro : <input class="filtro" type="text" name="filtro"  required autofocus>
        <input class="buttonfiltro" type="submit" value="pesquisar">
    </form>
  <div class="principal">
  <br>
       <?php
            print "<h2 class='registro'>$registros registos encontrados</h2>";
            print"<hr>";
             print "<br>";

            while($exibirRegistros = mysqli_fetch_array($consulta)){
 
             $codigo = $exibirRegistros[0];
             $nome = $exibirRegistros[1];
             $sexo = $exibirRegistros[2];
             $email = $exibirRegistros[3];
             $telefone =  $exibirRegistros[4];
             $whatsapp =  $exibirRegistros[5];
             $orcamento = $exibirRegistros[6];
             $ramo = $exibirRegistros[7];
              $data = $exibirRegistros[8];

             print"<article>";

             print "<h2 class='registro'>Codigo: $codigo</h2><br>";
             print "<nome>Nome: $nome</nome><br>";
             print "<nome>sexo: $sexo</nome><br>";
             print "<nome>Email: $email</nome><br>";
             print "<nome>Telefone: $telefone</nome><br>";
             print "<nome>whatsapp: $whatsapp</nome><br>";
             print "<nome>Orcamento em Reais: $orcamento</nome><br>";
             print "<nome>Ramo: $ramo</nome><br>";
             print "<nome>Data de Contrato: $data</nome><br>";


             print"</article>";
             print"<hr>";
            }

             mysqli_close($conexao);

        ?>
         
    </div>
    
</body>
</html>