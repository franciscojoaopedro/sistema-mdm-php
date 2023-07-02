<?php
include_once "../../php/db/conectar.php";

if(!empty($_GET['id'])){

    
    $id=$_GET['id'];
    $sql="SELECT * FROM produtos WHERE idProduto= '$id'";
    $result=$connect->query($sql);
    if($result->num_rows>0){
      $sqldelet="DELETE FROM produtos WHERE idProduto='$id' ";
      $resultdelet=$connect->query($sqldelet);
    }
    else{
      return  header('Location: ../../pages/Listar_Produtos/index.php');
    }
}

?>