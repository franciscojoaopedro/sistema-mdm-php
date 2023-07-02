<?php
include_once "../../php/db/conectar.php";

if(!empty($_GET['id'])){

    
    $id=$_GET['id'];
    $sql="SELECT * FROM produtos WHERE idProduto= '$id'";
    $result=$connect->query($sql);
    if($result->num_rows>0){
        while($dados=mysqli_fetch_assoc($result)){

            $NomeProduto=$dados['NomeProduto'];
            $MarcaProduto=$dados['MarcaProduto'];
            $PrecoUnitario=$dados['PrecoUnitario'];
           // $idCategoria=$dados['idCategora'];
        }
        //print_r($NomeProduto);
    }
    else{
        header('Location: ../Listar_Produtos/index.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageFormProdutoStyle.css">
    <title>MDM-FORM</title>
</head>
<body>
    <header>
        <nav>
            <h1>SISTEMA  EDITAR</h1>
        </nav>
        <div class="menu">
            <ul>
        
                <li><a class="btn_one" href="../Listar_Produtos/index.php">Produtos</a></li>
                <li><a class="btn_one" href="../Home/home.php">Home</a></li>
            </ul>
        </div>
    </header>
    <div class="app-form">

        <section class="login-container">
            <div class="rigth">
                <form action="../../php/actions/updateProdutos.php" method="post">
                    <div class="inputs">
                        <label for="">Nome do produto</label>
                        <input type="text" value="<?php echo $NomeProduto ?>"  name="nomeproduto" placeholder="Nome do produto">
                    </div>
                    <div class="inputs">
                        <label for="">Marca</label>
                        <input type="text" placeholder="Marca do Produto" value="<?php echo $MarcaProduto ?>" name="marcaproduto">
                    </div>
                    <div class="inputs">
                        <label for="">Preço</label>
                        <input type="text" placeholder="1000" name="precoproduto" value="<?php echo $PrecoUnitario ?>" > <span>Kz</span>
                        <input type="hidden" name="id" value="<?php echo $id?>"/>
                    </div>
                    <div class="inputs">
                        <label for="">Categoria</label>
                        <select name="categoria" id="">
                            <option  value="1">Computador</option>
                            <option value="2"  >Electronico</option>
                            <option value="3">GPS</option>
                        </select>
                    </input>
                    </div>
                    <div class="inputs-button">
                        
                        <button type="submit"  name="btn-cadastrar">Atualizar</button>
                    </div>
                </form>
            </div>
                <div class="left">
                    <div class="left-img">
                        <img src="../../../public/img/image1.jpeg" alt="">
                    </div>
                </div>
        </section>
    </div>
</body>
</html>