<?php
include_once "../db/conectar.php";

if(isset($_POST['btn-cadastrar'])):
    $NomeProduto=$_POST['nomeproduto'];
    $MarcaProduto=$_POST['marcaproduto'];
    $PrecoUnitario=$_POST['precoproduto'];
    $idCategoria=$_POST['categoria'];

   
    echo(var_dump($_POST));
    if(empty($NomeProduto) && empty($MarcaProduto)):
        echo "<script> alert('Preencha todos os campos')  </script>";
       header('Location: ../pages/Cadastrar_Produtos/pageFormProduto.php');
    else:
        $sql = "INSERT INTO produtos (NomeProduto,MarcaProduto,PrecoUnitario,idCategoria) VALUES ('$NomeProduto','$MarcaProduto','$PrecoUnitario','$idCategoria') ";
       if( mysqli_query($connect, $sql)){
           echo "<script>alert('Produto Cadastrado')</script>";
          header('Location:');
       }
      
    endif;
endif;

?>