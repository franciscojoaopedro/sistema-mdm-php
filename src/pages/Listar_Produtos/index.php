<?php
include_once "../../php/db/conectar.php";

$sql = "SELECT 
tipoCategora,idProduto,NomeProduto,MarcaProduto,
PrecoUnitario FROM produtos INNER JOIN categorias ON produtos.idCategoria=categorias.idCategoria";
$resultado = $connect->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageProdutosStyle.css">
   
    <title>MDM-LISTA-PRODUTOS</title>

  
</head>
<body>
<header>
    <nav>
        <h1>SISTEMA  MDM</h1>
    </nav>
    <div class="menu">
        <ul>
            <li><a class="btn_one" href="#">Dev</a></li>
            <li><a class="btn_one" href="../Cadastrar_Produtos/pageFormProduto.php">C.Produtos</a></li>
            <li><a class="btn_one" href="../Cadastrar_Categoria/pageFormCategoria.php">C.Categoria</a></li>
         
            <li><a class="btn_one" href="../Home/home.php">Home</a></li>
           
        </ul>
    </div>
</header>
    <div class="app-produtos">
        <div class="title">
            <h2>Lista de produtos</h2>
        </div>
        <section class="tabela">
        <div class="box-tabela">
            <table border="1" >
                <thead>
                    <tr>
                        <td>Id Produto</td>
                        <td>Nome do Produto</td>
                        <td>Marca</td>
                        <td>Preço</td>
                        <td>Categoria</td>
                        <td>Editar</td>
                        <td>Deletar</td>
                    </tr>
                </thead>
                <tbody id="tbody-list-amigo">
                    <?php
                        while($dados=mysqli_fetch_assoc($resultado)){
                           echo "<tr>";
                           echo "<td>" .$dados['idProduto']."</td>";
                           echo "<td>".$dados['NomeProduto']."</td>";
                            echo "<td>".$dados['MarcaProduto']. "</td>";
                            echo "<td>".$dados['PrecoUnitario']. "</td>";
                            echo "<td>".$dados['tipoCategora']."</td>";

                            echo "<td>
                            <a href='../Editar_Produtos/index.php?id=$dados[idProduto]' >Editar</a>
                            </td>";
                            echo "<td>
                            <a href='../../php/actions/deleteProduto.php?id=$dados[idProduto]' >Deletar</a>
                            </td>";

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