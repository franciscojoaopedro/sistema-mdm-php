<?php
session_start();

//print_r($_REQUEST);
if(isset($_POST['btn-entrar']) && !empty($_POST['senha']) && !empty($_POST['username']))
{
    include_once '../../php/db/conectar.php';

$username=$_POST['username'];
$senha=$_POST['senha'];
$sql="SELECT * FROM usuarios WHERE username= '$username' AND senha='$senha' ";

$result=$connect->query($sql);

if(mysqli_num_rows($result)<1){
    echo "<script>alert('dados invalidos')</script>";
    header('Location: index.php');
    unset($_SESSION['username']);
    unset($_SESSION['senha']);
}
else{
    $_SESSION['username']=$username;
    $_SESSION['senha']=$senha;
   header('Location: ../Home/home.php');
}
}
else{
    header('Location: index.php');
}

?>