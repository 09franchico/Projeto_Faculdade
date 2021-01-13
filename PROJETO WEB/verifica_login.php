<?php

if(!$_SESSION['usuario']){
   header('location: login.php');
   exit();
}

?>