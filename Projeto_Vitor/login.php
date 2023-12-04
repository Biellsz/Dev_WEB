<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Imagens/InfoFilmes aba.png">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/x-icon" href="Paginas de Filmes/Imagens/InfoFilmes aba.png">
    <script src="https://kit.fontawesome.com/73affd7905.js" crossorigin="anonymous"></script>
    <title>Tela de login</title>
</head>
<body>
<nav id="menu-h">
                <ul>
                    <li>
                        <a href="Home.php">Home</a>
                    </li>
        
                    <li><a href="Sobre.php">Sobre</a></li>
        
        
                    <li><a href="login.php">Entrar</a></li>
        
                </ul>
        
            </nav>
    <div>
        <h1>Login</h1>
        <br>
        <form action="testeLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <br>
            <button><a href="cadastroF.php"> Cadastre-se </a> </button>
        </form> 
    </div>
</body>
</html>