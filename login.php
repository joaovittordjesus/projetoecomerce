
<!--<?php
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

?>-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="home.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-dark fixed-top" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.html"><img src="img/tec.png" alt="" width="100px" height="70px"></a>

                <a class="navbar-brand" href="home.html" style="color: rgb(200, 200, 200);">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="games.html"
                                style="color:rgb(200, 200, 200);">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contato.html"
                                style="color: rgb(200, 200, 200);">Contato</a>
                        </li>
                        <li class="nav-item dropdown">
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.php" style="color: rgb(200, 200, 200);">Login</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 bg-light" type="search" placeholder="Procurar Eventos,Música..."
                            aria-label="Search">
                        <a href="https://www.google.com/webhp?hl=pt-BR&sa=X&ved=0ahUKEwiP15HK9cP_AhUQjpUCHZtZD1cQPAgI"
                            class="btn btn-outline-success" type="submit"
                            style="background-color: rgb(32, 106, 106); color: rgb(255, 255, 255);">Pesquisar</button></a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="main">
        <form action="testelogin.php" id="loginForm">
            <!--FORMULÁRIO DE LOGIN-->
            <h3 class="cabecalho">LOGIN</h3>
            <div class="login">

                <div class="div">

                    <label for="l-email"></label>
                    <input type="email" name="email" placeholder="Email" id="email">
                    <span id="emailError" style="color: red;"></span>

                    <label for="l-password"></label>
                    <input type="password" name="senha" placeholder="Senha"  id="senha" id="password">
                    <span id="passwordError" style="color: red;"></span>

                </div>
                <p>Ainda não tem uma conta? <a href="#" onclick="mostrarCadastro()">Cadastre-se</a></p>
                <input type="submit" name="submit" value="Enviar" class="button" onclick="validateForm()">
            </div>

        </form>


        <form action="login.php" method="POST" id="cadastroForm">

            <!--FORMULÁRIO DE CADASTRO-->
            <h3 class="cabecalho">CADASTRO</h3>
            <hr>
            <div class="cadastro">

                <label for="l-name"></label>
                <input type="text" name="nome" id="nome" class="entradausuario" placeholder="Nome Completo*">

                <div class="div2">

                    <div class="cadastro-left"><!--Lado esquerdo do cadastro-->
                        <label for="l-cpf"></label>
                        <input type="text" name="cpf" id="cpf" class="entradausuario" placeholder="CPF*">

                        <label for="l-telefone"></label>
                        <input type="text" name="telefone" id="telefone" class="entradausuario" placeholder="Telefone*">

                        <label for="l-password"></label>
                        <input type="password" name="senha" id="senha" class="entradausuario" placeholder="Senha*">
                    </div>

                    <div class="cadastro-right"><!--Lado direito do cadastro-->
                        <label for="l-endereco"></label>
                        <input type="text" name="endereco" id="endereco" class="entradausuario" placeholder="Endereço*">

                        <label for="l-email"></label>
                        <input type="email" name="email" id="email" class="entradausuario" placeholder="E-mail*">

                        <label for="l-confirm-password"></label>
                        <input type="password" name="senha" id="senha" class="entradausuario" placeholder="Confirme sua Senha*">
                    </div>
                    
                </div>
                <input type="submit" name="submit" id="submit" value="Enviar" class="button">
            </div>

        </form>

    </div>

</body>
<script src="login.js"></script>
<script src="https://kit.fontawesome.com/26d4a64054.js" crossorigin="anonymous"></script>

>>>>>>> bf52687673d3ae93a750ad8aa432e1bcc47a64ec
</html>