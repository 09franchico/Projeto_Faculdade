<?php
session_start();
include('php/conexao.php');
if(empty($_POST['email']) || empty($_POST['senha'])){
    header('location: login.php');
    exit();



}

$usuario = mysqli_real_escape_string($conexao,$_POST['email']);
$senha  = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select * from corretor where email = '{$usuario}' and senha='{$senha}'";

$result= mysqli_query ($conexao,$query);

$row = mysqli_num_rows($result);

if($row==1){
    $_SESSION['usuario']= $usuario;
    header('location: painel.php');
    exit();

}else{
    $_SESSION['nao_autenticado']= true;
    header('location:login.php');
    exit();


}




?>