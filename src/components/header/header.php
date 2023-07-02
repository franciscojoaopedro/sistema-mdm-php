<?php

$logado=$_SESSION['username'];

?>

<head>
    <link rel="stylesheet" href="header.css">
</head>
<header>
    <nav>
        <h1>SISTEMA  MDM</h1>
    </nav>
    <div class="menu">
        <ul>
            <li><a class="btn_one" href="./index.html">...</a></li>
        <?php echo "<li><a class='btn_one' href='./index.html'>User: <u>$logado</u> </a></li>";
        ?>
        </ul>
    </div>
</header>
