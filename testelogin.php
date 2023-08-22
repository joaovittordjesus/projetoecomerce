<?php
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //Acessa o sistema
        include_once('configuracaobd.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /*print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha);*/

        $sql = "SELECT * FROM Usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);
        /*print_r($result);
        print_r($sql);*/
        if(mysqli_num_rows($result) < 1){
            print_r('Não Existe');
        }
        else{
            print_r('Existe');
        }
    }
    else{
        //Não Acessa o sistema
        header('Location: login.php');
    }
?>