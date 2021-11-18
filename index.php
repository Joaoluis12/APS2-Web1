<?php

    include_once('api/includes/conexao.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&family=Rye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">
    <title>J.Burguer - Hamburguer João</title>
</head>
<body>

<?php include('pages/menu.html');?>

<main class="bg">
<section class="container">
    <div class="cabecalho">
        <h1 class="logo-session">J.Burguer</h1>
        <h3 class="sub-titulo-inicial">Hamburguer levado a sério</h3>
    </div>
    <div class="principais-produtos">
        <h3>Principais escolhas</h3>
    </div>
</section>





</main>

<?php
    include('pages/modal_login.html');
?>  

<script src="js/mobile-navbar.js"></script>
</body>
</html>