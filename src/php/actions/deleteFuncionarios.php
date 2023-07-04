<?php
include_once "../../php/db/conectar.php";

if(!empty($_GET['id'])){

    
    $id=$_GET['id'];
    $sql="SELECT * FROM funcionarios WHERE idfuncionario= '$id'";
    $result=$connect->query($sql);
    if($result->num_rows>0){
      $sqldelet="DELETE FROM funcionarios WHERE idfuncionario='$id' ";
      $resultdelet=$connect->query($sqldelet);
      echo" <script>alerte('deletado com sucesso')</script>";
      header('Location: ../../pages/Listar_Produtos/funcionarios.php');
      return ;
    }
    else{
      header('Location: ../../pages/Listar_Produtos/funcionarios.php');
      return ;
    }
}

?>