<?php
include_once "../../php/db/conectar.php";

$sql = "SELECT * FROM clientes";
$resultado = $connect->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageProdutosStyle.css">
   
    <title>MDM-LISTA-CLIENTES</title>

  
</head>
<body>
<header>
    <nav>
        <h1>SISTEMA  MDM</h1>
    </nav>
    <div class="menu">
        <ul>
            <li><a class="btn_one" href="#">MDM</a></li>
            <li><a class="btn_one" href="../Cadastrar_Produtos/pageFormProduto.php">C.Produtos</a></li>
            <li><a class="btn_one" href="../Cadastrar_Categoria/pageFormCategoria.php">C.Categoria</a></li>
         
            <li><a class="btn_one" href="../Home/home.php">Home</a></li>
           
        </ul>
    </div>
</header>
    <div class="app-produtos">
        <div class="title">
            <h2>Lista de Clientes</h2>
        </div>
        <section class="tabela">
        <div class="box-tabela">
            <table border="1" >
                <thead>
                    <tr>
                        <td>Numero</td>
                        <td>Nome do Cliente</td>
                        <td>Email</td>
                        <td>Contacto</td>
                        <td>Endereco</td>
                        <td>Operação</td>
                    </tr>
                </thead>
                <tbody id="tbody-list-amigo">
                    <?php
                        while($dados=mysqli_fetch_assoc($resultado)){
                           echo "<tr>";
                           echo "<td>" .$dados['idcliente']."</td>";
                           echo "<td>".$dados['nomecliente']."</td>";
                            echo "<td>".$dados['email']. "</td>";
                            echo "<td>".$dados['contacto']. "</td>";
                            echo "<td>".$dados['endereco']."</td>";
                           
if($_SESSION['']){
    echo "<td>
    <a href='../Editar_Produtos/clientes.php?id=$dados[idcliente]' >Editar</a>
    </td>";
    echo "<td>
    <a href='../../php/actions/updateCliente.php.php?id=$dados[idcliente]' >Deletar</a>
    </td>";
}else{
    return;
}


                        
                            

                           echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
   </section>
    </div>

    
</body>
</html>