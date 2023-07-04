<?php
include_once "../db/conectar.php";

if(isset($_POST['btn-cadastrar'])):
    $NomeFuncionario=$_POST['nomefuncionario'];
    $contacto=$_POST['contacto'];
    $departamento=$_POST['departamento'];
    $funcao=$_POST['funcao'];
    
   
    //echo(var_dump($_POST));
    if(empty($NomeFuncionario) && empty($contacto)):
        echo "<script> alert('Preencha todos os campos')  </script>";
       header('Location: ../../pages/Cadastrar_Produtos/pageFormProduto.php');
       return;
    else:
        $sql = "INSERT INTO funcionarios (nomefuncionario,contacto,departamento,funcao) VALUES ('$NomeFuncionario','$contacto','$departamento','$funcao') ";
       if( mysqli_query($connect, $sql)){
           echo "<script>alert('Funcionario Cadastrado')</script>";
           echo "<script>alert('Funcionario Cadastrado')</script>";
             header('Location: ../../pages/Cadastrar_Funcionarios/pageFormFuncionarios.php');
          return  ;
          //header('Location:');
       }else{
         header('Location: ../../pages/Cadastrar_Funcionarios/pageFormFuncionarios.php');
         return   "<script>alert('Erro ao Cadastrado')</script>";
           
       }
      
    endif;
endif;

?>