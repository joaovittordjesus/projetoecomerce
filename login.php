<?php
    if(isset($_POST['submit']));

    /*
    Teste de envio de informações do cadastro ao banco de dados
    print_r('Nome: '. $_POST['nome']);
    print_r('<br>');
    print_r('CPF: '. $_POST['cpf']);
    print_r('<br>');
    print_r('Endereço: '. $_POST['endereco']);
    print_r('<br>');
    print_r('Telefone: '. $_POST['telefone']);
    print_r('<br>');
    print_r('Email: '. $_POST['email']);
    print_r('<br>');
    print_r('Senha: '. $_POST['senha']);
    print_r('<br>');
    */

    //Variáveis para as querrys do BD
    include_once('configuracaobd.php');
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO Usuarios(nome,cpf,endereco,telefone,email,senha) VALUES ('$nome','$cpf','$endereco','$telefone','$email','$senha')");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="main">
        <form action="" id="loginForm">

            <h3 class="cabecalho">LOGIN</h3>
            <hr>
            <div class="login">

                <div class="div">

                    <label for="l-email"></label>
                    <input type="email" placeholder="E-mail" id="email">
                    <span id="emailError" style="color: red;"></span>

                    <label for="l-password"></label>
                    <input type="password" placeholder="Senha" id="password">
                    <span id="passwordError" style="color: red;"></span>

                </div>
                <p>Ainda não tem uma conta? <a href="#" onclick="mostrarCadastro()">Cadastre-se</a></p>
                <input type="button" value="Enviar" class="button" onclick="validateForm()">
            </div>

        </form>


        <form action="login.php" method="POST" id="cadastroForm">

            <h3 class="cabecalho">CADASTRO</h3>
            <hr>
            <div class="cadastro">

                <div class="div">

                    <label for="l-name"></label>
                    <input type="text" name="nome" id="nome" class="entradausuario" placeholder="NOME COMPLETO">
                    <br><br>

                    <label for="l-cpf"></label>
                    <input type="text" name="cpf" id="cpf" class="entradausuario" placeholder="CPF">
                    <br><br>

                    <label for="l-endereco"></label>
                    <input type="text" name="endereco" id="endereco" class="entradausuario" placeholder="ENDEREÇO">
                    <br><br>

                    <label for="l-telefone"></label>
                    <input type="text" name="telefone" id="telefone" class="entradausuario" placeholder="TELEFONE">
                    <br><br>

                    <label for="l-email"></label>
                    <input type="email" name="email" id="email" class="entradausuario" placeholder="EMAIL">
                    <br><br>

                    <div class="password">
                        <label for="l-password"></label>
                        <input type="password" name="senha" id="senha" class="entradausuario" placeholder="SENHA">
                        <label for="l-confirm-password"></label>
                        <input type="password" name="senha" id="senha" class="entradausuario" placeholder="CONFIRME SUA SENHA">
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="ENVIAR" class="button">
            </div>

        </form>

    </div>

</body>
<script src="login.js"></script>
<script src="https://kit.fontawesome.com/26d4a64054.js" crossorigin="anonymous"></script>

</html>