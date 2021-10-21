<?php //Valida o login informado pelo usuário
    session_start();

    $con = mysqli_connect("localhost", "root", "", "banco_crianca_alerta");

    if(mysqli_connect_errno()){
        echo "Erro: " . mysqli_connect_error();
    }

    $usuarioLogin = $_POST['usuario'];
    $senhaLogin = $_POST['senha'];
    $senhaCrypt = crypt($senhaLogin, '$6$rounds=5000$noCh1ldMu5tS0f37/d3scP4ss.alB4trHjan');

    $buscarUsuario = "SELECT * FROM Criancas WHERE usuario = '$usuarioLogin'";
    $verificaLogin = mysqli_query($con, $buscarUsuario);
    $dadosUser = mysqli_fetch_assoc($verificaLogin);

    if($dadosUser['usuario'] == $usuarioLogin){
        echo "certo usuário <br>";
        if($dadosUser['senha'] == $senhaCrypt){
            $_SESSION['mensagem'] = "<div class='alert sucesso' role='alert'>Usuário logado. Bom jogo $usuarioLogin!</div>";
            $_SESSION['logged'] = True;
            header("Location: ../pages/jogo.php");
            echo "certo senha";
        }else {
            $_SESSION['mensagem'] = "<div class='alert erro' role='alert'>Erro! Usuário ou senha incorretos!</div>";
            header("Location: ../pages/login.php");
        }
    }else {
        $_SESSION['mensagem'] = "<div class='alert erro' role='alert'>Erro! Usuário ou senha incorretos!</div>";
        header("Location: ../pages/login.php");
    }
?>