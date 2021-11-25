<?php

    include_once('../api/includes/conexao.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&family=Rye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include('menu.html');?>


    <form action="" method="post">
    <fieldset class="container-form">
        <legend class="form-titulo">Cadastro de Usuarios</legend>
        
        <fieldset class="grupo">
            <legend>Nome e Sobrenome</legend>
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
            </div>

            <!-- Campo do sobrenome com legenda "sobrenome" e css de classe "campo" -->
            <div class="campo">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome" required>
            </div>
        </fieldset> 

        <fieldset class="grupo">
            <legend>Endereço</legend>
            <!-- Campo de tecnologias para escolha de 1 ou mais opções para marcar (checkbox) e css de classe "campo" -->
            <div class="campo">
                <textarea rows="6" style="width: 35em" id="endereco" name="endereco"></textarea>
            </div>
        </fieldset>

        <!-- Campo de email com-->
        <fieldset class="grupo">
            <legend>Dados de Login</legend>
            <div class="campo-senha">
                <label for="email"><strong>Email</strong></label>
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <label for="email"><strong>Senha</strong></label>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <label for="email"><strong>Confirme sua senha</strong></label>
                <input type="password" name="senha-confirm" id="senha-confirm" placeholder="Confirme sua senha" required>
            </div>
        </fieldset>


        <button class="botao">Enviar</button>
    </fieldset>
    
    </form>

    <script src="../js/mobile-navbar.js"></script>
</body>
</html>