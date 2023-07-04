<?php
include_once "../db/conectar.php";

if(isset($_POST['btn-cadastrar'])):
    $NomeProduto=$_POST['nomeproduto'];
    $MarcaProduto=$_POST['marcaproduto'];
    $PrecoUnitario=$_POST['precoproduto'];
    $idCategoria=$_POST['categoria'];
    $id=$_POST['id'];


   
    echo(var_dump($_POST));
    if(empty($NomeProduto) && empty($MarcaProduto)):
        echo "<script> alert('Preencha todos os campos')  </script>";
       header('Location:');
    else:
        $sql = "UPDATE  produtos SET NomeProduto='$NomeProduto',MarcaProduto='$MarcaProduto',PrecoUnitario='$PrecoUnitario',idCategoria='$idCategoria' 
        WHERE idProduto='$id'
        ";
       if( mysqli_query($connect, $sql)){
         //  echo "<script>alert('Produto Atualizado')</script>";
         return  header('Location:../../pages/Listar_Produtos/index.php');
        }
        
    endif;
endif;

?>