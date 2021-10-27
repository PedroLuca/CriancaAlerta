<?php
    session_start();
?>

<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../css/main.css"/>
        <link type="text/css" rel="stylesheet" href="../css/style.css"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" type="image/x-icon" href="../media/logo-rodape.png">
        <title> Criança Alerta | Faça seu login! </title>
        <meta charset="UTF-8">
    </head>
    <body>
        <nav class="navigation">
            <div class="menu-mobile" id="menu-mobile">
                <button class="btn-mobile" id="btn-mobile"><span class="hamburguer"></span><span class="text-desktop">Menu</span></button>
                <ul class="nav-menu">
                    <li><a href="../index.php">Início</a></li>
                    <li><a href="tipo_de_violencia.html">Tipos de Violência</a></li>
                    <li><a href="quebrando_silencio.html">Quebrando o Silêncio</a></li>
                    <li><a href="direitos.html">Direito das Crianças</a></li>
                    <li><a href="login.php">Jogue nosso jogo!</a></li>
                </ul>
            </div>
            <a href="../index.php"><img id="logo-central" src="../media/logo-nome.png"></a>
            <a href="../index.php"><img id="menu-logo" src="../media/logo-oficial.png"></a>
        </nav>
        <section class="conteudo-login-cadastro">
            <div class="form-login">
                <div class="cabecalho">
                    <h3>Login</h3>
                </div>
                <div class="form">
                    <form method="POST" action="../php/loginValidation.php">
                        <div class="form-field">
                            <label for="username">Nome de usuário</label>
                            <input type="text" id="username" name="usuario">
                        </div>
                        <div class="form-field">
                            <label for="password">Senha</label>
                            <input type="password" id="password" name="senha">
                        </div>
                        <div class="form-field">
                            <button class="btn-large waves-effect #64b5f6 blue lighten-2" style="width:100%">Entrar</button>
                        </div></br>
                        <p style="text-align: center;"> Não tem cadastro?
                        <a href="cadastro.php" class="login-link">Registre-se agora!</a></p>
                    </form>
                </div>
            </div>
        </section>
        <footer class="rodape">
            <div class="rodape-content">
                <div class="linhas">
                    <div class="rodape-text">
                        <h5>O que é o Criança Alerta?</h5>
                        <p>O projeto foi criado por alunos do <a href="https://www.ifbaiano.edu.br/unidades/guanambi/" class="rodape-web" target="_blank">Instituto Federal Baiano - Campus Guanambi</a>, na qual o objetivo era desenvolver um site para auxiliar crianças, apresentando conteúdos sobre violência infantil, assédios e como se comportarem diante de tais situações, além de informar os direitos que toda criança deve ter, onde encontrá-los e orgãos que devem garantir esses direitos.</p>
                    </div>
                </div>
                <div class="links">
                    <h5>Entre em contato conosco:</h5>
                    <ul>
                        <li><a class="rodape-web" href="https://instagram.com/crianca.alerta" target="_blank">Instagram</a></li>
                        <li><a class="rodape-web" href="https://github.com/criancaalerta" target="_blank">Github</a></li>
                        <li><a class="rodape-web" href="mailto:projetocriancaalerta@outlook.com">Projetocriancaalerta@outlook.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="rodape-copyright">
                <div class="rodape-content-copyright">
                    © 2019 - 2021 All copyrights reserved to Criança Alerta LTDA
                    <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
                </div>
                <div class="rodape-imagem-box">
                    <img src="../media/logo-rodape.png" class="rodape-imagem">
                </div>
            </div>
        </footer>
        <div id="mensagem">
        <?php
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
        ?>
        </div>
        <script src="../js/main.js"></script>
        <script src="../js/app.js"></script>
    </body>
</html>