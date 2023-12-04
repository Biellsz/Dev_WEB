<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Titulo da Pagina -->
    <title>Divertida mente</title>
    <script src="https://kit.fontawesome.com/73affd7905.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="Paginas de Filmes/Imagens/InfoFilmes aba.png">
</head>

<body>
    <link rel="stylesheet" href="Pagina-Divertidamente.css">

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
    <h1 class="Titulo">Divertida Mente</h1>
    <main>
        <img src="Imagens/filmes/Divertidamente.png" id="Img Divertidamente" class="banner" />
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
            Data de lançamento: 18/06/2015
        </h4>
        <br>

        <h4>
            Diretor: Pete Docter
        </h4>
        <br>

        <h4>
            Gêneros: Animação, Aventura, Comédia, Drama, Família, Fantasia
        </h4>
        <br>
        <!--Descrição-->
        <h4>
            Sinopse:
        </h4>

        <div class="sinopse">
            <p class="p1">
                Crescer pode ser uma jornada turbulenta, e com Riley não é diferente. Ela é retirada de sua vida no
                meio-oeste americano quando seu pai arruma um novo emprego em São Francisco. Como todos nós, Riley é
                guiada pelas emoções; Alegria, Medo, Raiva, Nojinho e Tristeza. As emoções vivem no centro de controle
                dentro da mente de Riley, onde a ajudam com conselhos em sua vida cotidiana. Conforme Riley e suas
                emoções se esforçam para se adaptar à nova vida em São Francisco, começa uma agitação no centro de
                controle. Embora Alegria, a principal e mais importante emoção de Riley, tente se manter positiva, as
                emoções entram em conflito sobre qual a melhor maneira de viver em uma nova cidade, casa e escola.
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
                <img class="personagem" src="Imagens/filmes/Divertidamente/Kaitlyn Dias - Riley.jpeg" />
                <!--Link da foto do personagem-->
                <figcaption>Kaitlyn Dias</figcaption>
                <figcaption>Riley</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Divertidamente/Amy Poehler - Alegria.jpg" />
                <!--Link da foto do personagem-->
                <figcaption>Amy Poehler</figcaption>
                <figcaption>Alegria</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Divertidamente/Phyllis Smith - Tristeza.jpg" />
                <!--Link da foto do personagem-->
                <figcaption>Phyllis Smith</figcaption>
                <figcaption>Tristeza</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Divertidamente/Mindy Kaling - Nojo.jpeg" />
                <!--Link da foto do personagem-->
                <figcaption>Mindy Kaling</figcaption>
                <figcaption>Nojo</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Divertidamente/Bill Hader - Medo.jpeg" />
                <!--Link da foto do personagem-->
                <figcaption>Bill Hader</figcaption>
                <figcaption>Medo</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Divertidamente/Lewis Black - Raiva.jpg" />
                <!--Link da foto do personagem-->
                <figcaption>Lewis Black</figcaption>
                <figcaption>Raiva</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Divertidamente/Richard Kind - Big Bong.jpg" />
                <!--Link da foto do personagem-->
                <figcaption>Richard Kind</figcaption>
                <figcaption>Big Bong</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Divertidamente/Diane Lane - Jill O'Riley  Mae.jpg" />
                <!--Link da foto do personagem-->
                <figcaption>Diane Lane</figcaption>
                <figcaption>Jill O'Riley <br> Mae</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem"
                    src="Imagens/filmes/Divertidamente/Kyle MacLachlan - Bill Andersen Pai.jpg" />
                <!--Link da foto do personagem-->
                <figcaption>Kyle Maclachlan</figcaption>
                <figcaption>Bill Andersen<br> Pai</figcaption>
            </figure>
        </div>
    </div>

</body>

</html>