
<?php
$severname = "localhost";
$db_name = "loja_mdm";
$password = "1234"; // alterar aqui 
$username = "root"; // aqui também

$connect = mysqli_connect($severname, $username, $password, $db_name);
if(mysqli_connect_error()):
    echo "Erro ao conectar a base de dados".mysqli_connect_error();
endif;

?>

