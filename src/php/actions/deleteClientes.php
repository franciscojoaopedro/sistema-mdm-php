<?php
include_once "../../php/db/conectar.php";

if(!empty($_GET['id'])){

    
    $id=$_GET['id'];
    $sql="SELECT * FROM clientes WHERE idcliente= '$id'";
    $result=$connect->query($sql);
    if($result->num_rows>0){
      $sqldelet="DELETE FROM clientes WHERE idcliente='$id' ";
      $resultdelet=$connect->query($sqldelet);
      echo" <script>alerte('deletado com sucesso')</script>";
      header('Location: ../../pages/Listar_Produtos/clientes.php');
      return ;
    }
    else{
      header('Location: ../../pages/Listar_Produtos/clientes.php');
      return ;
    }
}

?>