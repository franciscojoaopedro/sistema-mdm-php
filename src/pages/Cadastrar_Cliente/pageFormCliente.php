<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageFormClientes.css">
    <title>MDM-FORM</title>
</head>
<body>
    <header>
        <nav>
            <h1>MDM CLIENTE</h1>
        </nav>
        <div class="menu">
            <ul>
        
                <li><a class="btn_one" href="../Listar_Produtos/clientes.php">Clientes</a></li>
                <li><a class="btn_one" href="../Home/home.php">Home</a></li>
            </ul>
        </div>
    </header>
    <div class="app-form">

        <section class="login-container">
            <div class="rigth">
                <form action="../../php/actions/cadastrarCliente.php" method="post">
                    <div class="inputs">
                        <label for="">Nome do cliente</label>
                        <input type="text" name="nomecliente" placeholder="nome do cliente">
                    </div>
                    <div class="inputs">
                        <label for="">Email</label>
                        <input type="text" placeholder="email" name="email">
                    </div>
                    <div class="inputs">
                        <label for="">Contacto</label>
                        <input type="text" placeholder="contacto" name="contacto">
                    </div>
                    <div class="inputs">
                        <label for="">Endereço</label>
                        <input type="text" placeholder="endereco" name="endereco">
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