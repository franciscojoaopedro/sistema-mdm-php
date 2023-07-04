<?php

session_start();
$logado=$_SESSION['username'];
include_once "../../php/db/conectar.php";

$sql = "SELECT  * FROM funcionarios";
$resultado = $connect->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageProdutosStyle.css">
   
    <title>MDM-LISTA-FUNCIONARIOS</title>

  
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
            <h2>Lista de Funcionarios</h2>
        </div>
        <section class="tabela">
        <div class="box-tabela">
            <table border="1" >
                <thead>
                    <tr>
                        <td>Numero</td>
                        <td>Nome do Funcionario</td>
                        <td>Contacto</td>
                        <td>Departamento</td>
                        <td>Funcao</td>
                    </tr>
                </thead>
                <tbody id="tbody-list-amigo">
                    <?php
                        while($dados=mysqli_fetch_assoc($resultado)){
                           echo "<tr>";
                           echo "<td>" .$dados['idfuncionario']."</td>";
                           echo "<td>".$dados['nomefuncionario']."</td>";
                            echo "<td>".$dados['contacto']. "</td>";
                            echo "<td>".$dados['departamento']. "</td>";
                            echo "<td>".$dados['funcao']."</td>";

                            if($logado){
                                echo "<td>
                                <a href='../Editar_Produtos/funcionarios.php?id=$dados[idfuncionario]' >Editar</a>
                                </td>";
                                echo "<td>
                                <a href='../../php/actions/updateFuncionarios.php?id=$dados[idfuncionario]' >Deletar</a>
                                </td>";
                            }
                            
                                else{
                                    echo "<td>
                                    <a href='#' >----</a>
                                    </td>";
                                    echo "<td>
                                    <a href='#' >----</a>
                                    </td>";
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