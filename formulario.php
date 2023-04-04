<?php

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/formulario.css" media="all" />
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="shortcut icon" href="img/if.jpeg">
    <title>SICOHV</title>
</head>
<body>
    <!--Logo IFAC-->
    <div class="cabecalho">
        <div id="logo">
            <a href="index.html"><img src="img/if.png"></a>
        </div>
        <div id="portal">
            <h1>Portal do professor</h1>
        </div>
    </div>
    <!--Formulário-->
    <div class="row">
        <div class="form">
            <h2>LOGIN</h2>
            <form action="autenticacao.php" method="post">
                <input type="text" id="usuario" name="usuario" placeholder="Usuário" required>
                <input type="password" id="senha" name="senha" placeholder="Senha" required>
                <div id="botao">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>
    <!--Cadastro-->
    <div class="row">
        <a href="cadastro.html">Não tem cadastro? Faça aqui</a>
    </div>
</body>
</html>