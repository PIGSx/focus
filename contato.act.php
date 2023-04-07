<?php
 extract($_POST);

 require('connect.php');
 if(mysqli_query($con,"INSERT INTO `tb_contatos` (`codigo`, `nome`, `email`, `senha`) 
 VALUES ('0', '$nome', '$email', '$senha');")){

    $msg = "<p class=sucesso>registro criado com sucesso!!</p>";
    } else{
    $msg = "<p class=erro>errou kkkkkk</p>";
    }
     session_start();
          $_SESSION['msg']=$msg;
header("location:formulario.php");   
