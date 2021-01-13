<?php
session_start();
include('verifica_login.php');

?>

<?php

include_once("php/conexao.php");
$id= intval($_GET['id']);
$result_cliente = "delete from cliente where id_cliente ='$id'";
$resultado_cliente = mysqli_query($conexao,$result_cliente);

if(mysqli_affected_rows($conexao)){

    print"Dados apagados com sucesso";
    header("location:dadoscliente.php");
}
else{
    print"Dados nao Excluido";
    header("location:dadoscliente.php");

}

?>