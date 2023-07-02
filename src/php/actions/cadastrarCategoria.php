<?php
include_once "../db/conectar.php";

if(isset($_POST['btn-cadastrar'])):
    $idCategoria=$_POST['idcategoria'];
    $Categoria=$_POST['categoria'];
   

   
    //echo(var_dump($_POST));
    if(empty($idCategoria) && empty($Categoria)):
        echo "<script> alert('Preencha todos os campos')  </script>";

    else:
        $sql = "INSERT INTO categorias (idCategoria,tipoCategora) VALUES ('$idCategoria','$Categoria') ";
       if( mysqli_query($connect, $sql)){
           echo "<script>alert('Categoria Cadastrada')</script>";

       }
      
    endif;
endif;

?>