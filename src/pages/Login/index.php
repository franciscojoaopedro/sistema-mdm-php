<?php

// Conexão
require_once '../../php/db/conectar.php';

// Sessão
session_start();

// B
if (isset($_POST['btn-entrar'])):
	$erros=array();
	$username=mysqli_escape_string($connect,$_POST['username']);
	$senha=mysqli_escape_string($connect,$_POST['senha']);

	if(empty($username) || empty($senha)):
		$erros[]= "<li> O campo login/senha precisa ser preenchido </li>";
	else:
		$sql=" SELECT username FROM usuarios WHERE username= '$username'";
		$resultado=mysqli_query($connect,$sql);
		if (mysqli_num_rows($resultado)>0) {
			$senha=md5($senha);

			$sql="SELECT * FROM usuarios WHERE username= '$username' AND senha ='$senha'";
			$resultado=mysqli_query($connect,$sql);
			if (mysqli_num_rows($resultado)==1) {
				$dados=mysqli_fetch_array($resultado);
				$_SESSION['logado']=true;
				$_SESSION['id_usuario']=$dados['idusuario'];
				header('Location: ../Home/home.php');
			}
			else{
			$erros[]="<li>Usuario e senha não validos </li>";

			}
		}
		else{
			$erros[]="<li>Usuario inexistente </li>";
		}

	endif;


endif;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="globalStyle.css">
    <title>MDM-LOGIN</title>
</head>
<body>
    <div class="app">
        <section class="login-container">
                <div class="left">
                    <div class="left-img">
                        <img src="img/image1.jpeg" alt="">
                    </div>
                </div>
                <div class="rigth">
                    <div class="title">
                        <h2>SISTEMA MDM LOGIN</h2>
                    </div>
                    <?php 

		if (!empty($erros)) {
			foreach ($erros as $erro) {
				echo $erro;
			}
		}
		?>
                    <form action="testLogin.php" method="POST" >
                        <div class="inputs">
                            <label for="">Usuario</label>
                            <input type="text" placeholder="username" name="username" required>
                        </div>
                        <div class="inputs">
                            <label for="">Senha</label>
                            <input type="password" placeholder="**********"  name="senha" required>
                        </div>
                        <div class="inputs-button">
                           
                            <button type="submit" name="btn-entrar">Entrar</button>
                        </div>
                    </form>
                </div>
        </section>
    </div>
</body>
</html>