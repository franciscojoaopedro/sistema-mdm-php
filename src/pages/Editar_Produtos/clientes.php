<?php
include_once "../../php/db/conectar.php";

if(!empty($_GET['id'])){

    
    $id=$_GET['id'];
    $sql="SELECT * FROM cliente WHERE idcliente= '$id'";
    $result=$connect->query($sql);
    if($result->num_rows>0){
        while($dados=mysqli_fetch_assoc($result)){

            $nomecliente=$dados['nomecliente'];
            $email=$dados['email'];
            $contacto=$dados['contacto'];
            $endereco=$dados['endereco'];
           
        }
       
    }
    else{
        header('Location: ../Listar_Produtos/clientes.php');
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
                <form action="../../php/actions/updateCliente.php" method="post">
                    <div class="inputs">
                    <input type="hidden" name="id" value="<?php echo $id?>"/>
                        <label for="">Nome do cliente</label>
                        <input type="text" name="nomecliente" placeholder="nome do cliente" value="<?php echo $nomecliente?>" >
                    </div>
                    <div class="inputs">
                        <label for="">Email</label>
                        <input type="text" placeholder="email" name="email" 
                        value="<?php echo $email?>"
                        >
                    </div>
                    <div class="inputs">
                        <label for="">Contacto</label>
                        <input type="text" placeholder="contacto" name="contacto"
                        value="<?php echo $contacto?>"
                        >
                    </div>
                    <div class="inputs">
                        <label for="">Endereço</label>
                        <input type="text" placeholder="endereco" name="endereco" 
                        value="<?php echo $endereco?>"
                        >
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