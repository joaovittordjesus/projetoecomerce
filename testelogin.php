<?php
    // Verifica se o formulário foi submetido e se os campos de email e senha não estão vazios
    //Error(0)
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        // Inclui o arquivo de configuração do banco de dados
        include_once('configuracaobd.php');
        
        // Captura os valores de email e senha do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Cria a consulta SQL para verificar se o usuário existe no banco de dados
        $sql = "SELECT * FROM Usuarios WHERE email = '$email' and senha = '$senha'";

        // Executa a consulta no banco de dados
        $result = $conexao->query($sql);

        // Verifica se a consulta retornou algum resultado
        if(mysqli_num_rows($result) <1){
            // Caso não haja correspondência, redireciona de volta para a página de login
            header('Location: login.php');
        }
        else{
            // Caso haja correspondência, redireciona para a página de home (ou onde desejar)
            header('Location: home.php');
        }
    }
    else{
        // Se o formulário não foi submetido corretamente, redireciona de volta para a página de login
        header('Location: login.php');
    }
?>
