<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/73affd7905.js" crossorigin="anonymous"></script>
    <!-- Titulo da Pagina -->
    <title>Homem Aranha no Aranha verso</title>

    <link rel="stylesheet" href="Pagina-Narnia.css">
    <link rel="icon" type="image/x-icon" href="Paginas de Filmes/Imagens/InfoFilmes aba.png">
</head>

<body>
    <link rel="stylesheet" href="Pagina-Homem-Aranha.css">

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
    <h1 class="Titulo">Homem Aranha no Aranhaverso</h1>
    <main>
        <img src="Imagens/filmes/Homem aranha.png" id="Img Homem aranha" class="banner" />
        <!--Discrição-->

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
            Data de lançamento: 10/01/2019
        </h4>
        <br>

        <h4>
            Diretor: Bob Persichetti, Peter Ramsey, Rodney Rothman
        </h4>
        <br>

        <h4>
            Gêneros: Ação, Animação, Aventura, Família, Ficção Científica, Super-herói
        </h4>
        <br>
        <!--Descrição-->
        <h4>
            Sinopse:
        </h4>

        <div class="sinopse">
            <p class="p1">
                Miles Morales é um jovem negro do Brooklyn que se tornou o Homem-Aranha inspirado no legado de Peter
                Parker, já falecido. Entretanto, ao visitar o túmulo de seu ídolo em uma noite chuvosa, ele é
                surpreendido com a presença do próprio Peter, vestindo o traje do herói aracnídeo sob um sobretudo. A
                surpresa fica ainda maior quando Miles descobre que ele veio de uma dimensão paralela, assim como outras
                versões do Homem-Aranha.
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
    <h2 style="padding-left: 10px;">
        ELENCO:
    </h2>
    <br>
    <div class="elenco ">
        <div>
            <figure>
                <img class="personagem" src="Imagens/filmes/Homem Aranha/Shameik Moore - Mile Morales.jpeg" />
                <!--Link da foto do personagem-->
                <figcaption> Shameik Moore</figcaption>
                <figcaption>Mile Morales</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Homem Aranha/Jake Johnson - Peter Parker.jpg" />
                <!--Link da foto do personagem-->
                <figcaption> Jake Johnson</figcaption>
                <figcaption>Peter Parker</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Homem Aranha/Haille Steinfeld - Gwen Stacy.jpg" />
                <!--Link da foto do personagem-->
                <figcaption> Heille Steinfeld</figcaption>
                <figcaption>Gwen Stacy</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem"
                    src="Imagens/filmes/Homem Aranha/Brian Tyree Henry - Jefferson Davis.jpeg" />
                <!--Link da foto do personagem-->
                <figcaption> Brian Tyree Henry</figcaption>
                <figcaption>Jefferson Davis</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Homem Aranha/Lily Tomlin - Tia May.jpg" />
                <!--Link da foto do personagem-->
                <figcaption> Lil Tomlin</figcaption>
                <figcaption>Tia May</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Homem Aranha/John Mulaney - Spider Ham.jpg" />
                <!--Link da foto do personagem-->
                <figcaption> John Mulaney</figcaption>
                <figcaption>Spider Ham</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Homem Aranha/Luna Lauren Velez - Rio Morales.jpg" />
                <!--Link da foto do personagem-->
                <figcaption> Lauren Velez </figcaption>
                <figcaption>Rio Morales</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Homem Aranha/Mahershala Ali - Uncle Aaron.jpg" />
                <!--Link da foto do personagem-->
                <figcaption> Mahershala Ali</figcaption>
                <figcaption>Uncle Aaron</figcaption>
            </figure>
        </div>

    </div>

</body>

</html>