<?php
session_start();

if((!isset($_SESSION['username'])==true) and (!isset($_SESSION['senha'])==true) ){
    unset($_SESSION['username']);
    unset($_SESSION['senha']);
    header('Location: ../Login/index.php');
}
$logado=$_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../components/asidebar/aside.css">
    <link rel="stylesheet" href="../../components/header/header.css">
    <link rel="stylesheet" href="../../components/footer/footer.css">
    
    <title>MDM</title>
    <style>
        section{
           
            display: flex;
            justify-content: center;
            align-items: center;
           flex-direction: column;
        }
        .image-center{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-center img{
            width: 400px;
            height: 400px;
        }
        body{
           
        }
    </style>
</head>
<body>
    <section>
    <?php include_once "../../components/header/header.php" ?>
    <?php include_once "../../components/asidebar/aside.php" ?>
   <section>
   <div class="image-center">
        <img src="../../../public/img/image1.jpeg"/>
    </div>
   </section>
    <?php include_once "../../components/footer/footer.php" ?>
    </section>
   

</body>
</html>