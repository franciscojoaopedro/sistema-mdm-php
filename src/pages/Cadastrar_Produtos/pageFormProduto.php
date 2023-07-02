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
            <h1>SISTEMA  MDM</h1>
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
                <form action="../../php/actions/cadastrarProdutos.php" method="post">
                    <div class="inputs">
                        <label for="">Nome do produto</label>
                        <input type="text" name="nomeproduto" placeholder="Nome do produto">
                    </div>
                    <div class="inputs">
                        <label for="">Marca</label>
                        <input type="text" placeholder="Marca do Produto" name="marcaproduto">
                    </div>
                    <div class="inputs">
                        <label for="">Preço</label>
                        <input type="text" placeholder="1000" name="precoproduto"> <span>Kz</span>
                    </div>
                    <div class="inputs">
                        <label for="">Categoria</label>
                        <select name="categoria" id="">
                            <option value="1">Computador</option>
                            <option value="2">Electronico</option>
                            <option value="3">GPS</option>
                        </select>
                    </input>
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