<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/73affd7905.js" crossorigin="anonymous"></script>
    <!-- Titulo da Pagina -->
    <title>Eu Sou a Lenda</title>
    <link rel="icon" type="image/x-icon" href="Paginas de Filmes/Imagens/InfoFilmes aba.png">
</head>

<body>
    <link rel="stylesheet" href="Pagina-Eu-Sou-a-Lenda.css">

    <!--Menu de navegação-->
    <nav id="menu-h">
        <ul>
            <li>
                <a href="Home.php">Home</a>
            </li>

            <li><a href="Sobre.php">Sobre</a></li>

            <li id="barra">
                <input type="text" id="txtBusca" placeholder="Buscar..." />
                <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
            </li>

            <li><a href="login.php">Entrar</a></li>

        </ul>

    </nav>

    <!--Titulo e imagem do Filme-->
    <h1 class="Titulo">Eu sou a lenda</h1>
    <main>
        <img src="Imagens/filmes/Eu sou a Lenda.png" id="Img Eu sou a Lenda" class="banner" />
        <!--Discrição-->
        <br>
        <h4>
            Avalição:
        </h4>

        <div class="ava">

            <br>
            <ul class="avaliacao">
                <li class="star-icon ativo" data-avaliacao="1"></li>
                <li class="star-icon" data-avaliacao="2"></li>
                <li class="star-icon" data-avaliacao="3"></li>
                <li class="star-icon" data-avaliacao="4"></li>
                <li class="star-icon" data-avaliacao="5"></li>
            </ul>
            <script>
                var stars = document.querySelectorAll('.star-icon');

                document.addEventListener('click', function (e) {
                    var classStar = e.target.classList;
                    if (!classStar.contains('ativo')) {
                        stars.forEach(function (star) {
                            star.classList.remove('ativo');
                        });
                        classStar.add('ativo');
                        console.log(e.target.getAttribute('data-avaliacao'));
                    }
                })
            </script>
        </div>
        <h4>
            Data de lançamento: 05/12/2007
        </h4>
        <br>

        <h4>
            Diretor: Francis Lawrence (II)
        </h4>
        <br>

        <h4>
            Gêneros: Drama, Ficção, Científica, Terror, Thriller
        </h4>
        <br>
        <!--Descrição-->
        <h4>
            Sinopse:
        </h4>

        <div class="sinopse">
            <p class="p1">
                Dr. Neville é um cientista militar. Ele é a única pessoa que não foi contaminada por um vírus, criado 3
                anos antes por uma cientista que buscava uma cura para o câncer, em toda a cidade de Nova Iorque e
                provavelmente em centenas de quilômetros. Ele já era o responsável por encontrar uma cura para esse
                vírus, por isso tem um laboratório no qual faz testes a partir do próprio sangue. As pessoas infectadas
                que não morreram imediatamente vivem como vampiros, apresentando sintomas parecidos aos da raiva e um
                comportamento selvagem e ameaçador. Portanto, Neville tem que lutar diariamente tanto contra o risco de
                cometer um erro e ser pego pelas pessoas infectadas, como contra a solidão que o atormenta diariamente.
            </p>
        </div>

        </div>

    </main>
    <br> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Elenco -->
    <h2 style="padding-left: 10px;">ELENCO:</h2>
    <br>
    <div class="elenco ">
        <div>
            <figure>
                <img class="personagem" src="Imagens/filmes/Eu sou a Lenda/Will Smith - Robert Neville.jpg" /> <!--Link da foto do personagem-->
                <figcaption> Will Smith</figcaption>
                <figcaption>Robert Neville</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Eu sou a Lenda/Charlie Tahan - Ethan.jpg" /> <!--Link da foto do personagem-->
                <figcaption> Charlie Tahan</figcaption>
                <figcaption>Ethan</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Eu sou a Lenda/Dash Mihok - Alpha.jpg" /> <!--Link da foto do personagem-->
                <figcaption> Dash Mihok</figcaption>
                <figcaption>Alpha</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Eu sou a Lenda/Alice Braga - Anna.jpeg" /> <!--Link da foto do personagem-->
                <figcaption> Alice Braga</figcaption>
                <figcaption>Anna</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Eu sou a Lenda/Emma Thompson - Dr.Krippen.jpeg" /> <!--Link da foto do personagem-->
                <figcaption> Emma Thompson</figcaption>
                <figcaption>Dr.Krippen</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Eu sou a Lenda/Alexander DiPersia - Male Evacuue.jpg" /> <!--Link da foto do personagem-->
                <figcaption>Alexander DiPersia</figcaption>
                <figcaption>Male Evacuue</figcaption>
            </figure>
        </div>
    </div>

</body>

</html>