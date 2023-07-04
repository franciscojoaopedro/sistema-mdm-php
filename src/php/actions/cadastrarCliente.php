<?php
include_once "../db/conectar.php";

if(isset($_POST['btn-cadastrar'])):
    $NomeCliente=$_POST['nomecliente'];
    $email=$_POST['email'];
    $contacto=$_POST['contacto'];
    $endereco=$_POST['endereco'];

    //echo(var_dump($_POST));
    if(empty($NomeCliente) && empty($contacto)):
        echo "<script> alert('Preencha todos os campos')  </script>";
       header('Location: ../pages/Cadastrar_Produtos/pageFormProduto.php');
    else:
        $sql = "INSERT INTO clientes (nomecliente,email,contacto,endereco) VALUES ('$NomeCliente','$email','$contacto','$endereco') ";
       if( mysqli_query($connect, $sql)){
           echo "<script>alert('Cliente Cadastrado')</script>";
          header('Location: ../../pages/Cadastrar_Cliente/pageFormCliente.php');
       }else{
        
        echo "<script>alert('Erro Cadastrado')</script>";
        
       // header('Location: ../../pages/Cadastrar_Cliente/pageFormCliente.php');
        return (header('Location: ../../pages/Cadastrar_Cliente/pageFormCliente.php'));
       }
       
    endif;
endif;

?>