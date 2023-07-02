<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageFormProdutoStyle.css">
    <title>MDM-CATEGORIA</title>
</head>
<body>
    <header>
        <nav>
            <h1>SISTEMA  MDM</h1>
        </nav>
        <div class="menu">
            <ul>
                <li><a class="btn_one" href="../Listar_Produtos/index.php"> Ver Produtos</a></li>
               
                <li><a class="btn_one" href="../Home/home.php">Home</a></li>
            </ul>
        </div>
    </header>
    <div class="app-form">

        <section class="login-container">
            <div class="rigth">
                <form action="../../php/actions/cadastrarCategoria.php" method="post">
                    <div class="inputs">
                        <label for="">ID Categoria</label>
                        <input type="number" name="idcategoria" placeholder="Numero Categoria">
                    </div>
                    <div class="inputs">
                        <label for="">Categoria</label>
                        <input type="text" placeholder="Categoria" name="categoria">
                    </div>
                   
                    <div class="inputs-button">
                        <button type="submit"  name="btn-cadastrar">Registrar</button>
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