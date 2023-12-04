<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="cadastroF.css">
<title>Formulario de cadastro</title>
<script src="https://kit.fontawesome.com/73affd7905.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="icon" type="image/x-icon" href="Paginas de Filmes/Imagens/InfoFilmes aba.png">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
        <div class="container">
            <div class="header">
                <h2>Criar uma conta</h2>
                <br>
                <a href="Home.php">Home</a>
            </div>

            <form id="form" class="form">
                <div class="form-control">
                    <label for="username">Nome de usuário</label>
                    <input type="text" name="username" id="username" placeholder="Digite seu nome de usuário...">
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small> Mensagem de erro </small>
                </div>

                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Digite seu email...">
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small> Mensagem de erro </small>
                </div>

                <div class="form-control">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Digite sua senha...">
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small> Mensagem de erro </small>
                </div>

                <div class="form-control">
                    <label for="password-confirmation">Confirmação de Senha</label>
                    <input type="password" name="password-confirmation" id="password-confirmation" placeholder="Digite a senha novamente">
                    <i class="fas fa-exclamation-circle"></i>
                    <i class="fas fa-check-circle"></i>
                    <small> Mensagem de erro </small>
                </div>

                <button type="submit" name="submit" id="submit">Enviar</button>
            </form>
        </div>
</body>
<script src="valida-form.js"></script>
</html>