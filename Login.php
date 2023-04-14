<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/styleLogin.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">

        <title>Login Cliente:</title>
    </head>
    <body>
    <body>
        <div class="container">
            <div class="form">
                <form method="post" action="validadorLogin.php">
                    <div class="form-header">
                        <div class="title">
                            <div class="logo">
                                <a href="../index.html">
                                    <img src="../images/CloNfeets_White.png" alt="">
                                </a>                            </div>
                            <h1>Logar-se</h1>
                        </div>
                        <div class="login-button">
                            <button><a href="../index.html">Sair</a></button>
                        </div>
                    </div>

                    <div class="input-group">

                        <div class="input-box">
                                <label for="boxEmail">Email:</label>
                                <input type="email" name="boxEmail" id="boxEmail" placeholder="Digite seu Email:" required>
                        </div>

                        <div class="input-box">
                            <label for="passSenha">Senha:</label>
                            <input type="password" name="passSenha" id="passSenha" placeholder="Digite sua Senha:" required>
                        </div>
                        <div class="input-box">
                            <div class="link cadastro">
                                <a href="Cadastro.php">Fazer meu cadastro?|</a>
                            </div>
                            <div class="link esqueci">
                                <a href="#">Esqueci a senha?</a>
                            </div>
                        </div>
                    </div>
                        <div class="continue-button">
                            <button type="submit" value="Cadastrar">Entrar</button>
                        </div>
                </form>
            </div>  
            <div class="form-image">
                <img src="../images/login-Screen.png" alt="">
            </div>
        </div>
    </body>
</html>