<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageFormFuncionarios.css">
    <title>MDM-FORM</title>
</head>
<body>
    <header>
        <nav>
            <h1>SISTEMA  MDM</h1>
        </nav>
        <div class="menu">
            <ul>
                <li><a class="btn_one" href="../Listar_Produtos/funcionarios.php">Funcionarios</a></li>
                <li><a class="btn_one" href="../Home/home.php">Home</a></li>
            </ul>
        </div>
    </header>
    <div class="app-form">

        <section class="login-container">
            <div class="rigth">
                <form action="../../php/actions/cadastrarFuncionario.php" method="post">
                    <div class="inputs">
                        <label for="">Nome do Funcionario</label>
                        <input type="text" name="nomefuncionario" placeholder="nome do funcionario">
                    </div>
                    <div class="inputs">
                        <label for="">Contacto</label>
                        <input type="text" placeholder="contacto" name="contacto">
                    </div>
                    <div class="inputs">
                        <label for="">Departamento</label>
                        <input type="text" placeholder="departamento" name="departamento">
                    </div>
                    <div class="inputs">
                        <label for="">Função</label>
                        <input type="text" placeholder="funcao" name="funcao">
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