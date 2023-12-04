<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/73affd7905.js" crossorigin="anonymous"></script>
    <!--Titulo da Pagina-->
    <title>John Wick 4</title>

    <link rel="icon" type="image/x-icon" href="Paginas de Filmes/Imagens/InfoFilmes aba.png">
</head>

<body>
    <link rel="stylesheet" href="Pagina-Jonh-Wick.css">

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
    <h1 class="Titulo">Jown Wick 4: Baba Yaga</h1>
    <main>
        <img src="Imagens/filmes/Jonh wick 4 Banner.jpg" id="Img Eu sou a Lenda" class="banner" />
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
            Data de lançamento: 23/03/2023
        </h4>
        <br>

        <h4>
            Diretor: Chad Stahelski
        </h4>
        <br>

        <h4>
            Gêneros: Ação
        </h4>
        <br>
          <!--Descrição-->
          <h4>
            Sinopse:
        </h4>
        <div class="sinopse">
            <p class="p1">
                O assassino profissional John Wick agora virou metade do submundo contra ele com sua vingança, que agora está entrando em sua quarta rodada em Nova York, Berlim, Paris e Osaka. 
                Sua equipe, composta por Bowery King, o gerente do hotel Winston e o concierge Charon do lendário hotel assassino Continental, novamente fazem parte da festa. 
                No entanto, as chances de escapar desta vez parecem quase impossíveis, pois o maior inimigo está surgindo. 
                O implacável chefe do submundo Marquis de Gramont, que tem alianças inteiras atrás dele, representa a maior e sanguinária ameaça até hoje.
                Mas seus capangas também são durões, incluindo Shimazu e Killa localizados. 
                Felizmente, existem velhos aliados como Caine que correm para ajudar Wick. 
                Não há caminho de volta, só um sobrevive.
            </p>
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
                <img class="personagem" src="Imagens/filmes/Jonh Wick/Keanu Reeves - Jonh Wick.jpg" />
                <!--Link da foto do personagem-->
                <figcaption> Keanu Reeves</figcaption>
                <figcaption>Jonh Wick</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Jonh Wick/Lance Reddick - Charon.jpeg" />
                <!--Link da foto do personagem-->
                <figcaption> Lance Reddick</figcaption>
                <figcaption>Charon</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Jonh Wick/Bill-Skarsgard - Marques Vincent.png" />
                <!--Link da foto do personagem-->
                <figcaption> Bill Skarsgard</figcaption>
                <figcaption>Marques Vincent</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Jonh Wick/Donnie Yen - Caine.jpg" />
                <!--Link da foto do personagem-->
                <figcaption> Donnie Yen</figcaption>
                <figcaption>Caine</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Jonh Wick/Ian McShane - Winston.jpeg" />
                <!--Link da foto do personagem-->
                <figcaption>Ian McShane</figcaption>
                <figcaption>Winston</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Jonh Wick/Hiroyuki Sanada - Shumazu Koji.jpg" />
                <!--Link da foto do personagem-->
                <figcaption> Hiroyuki Sanada</figcaption>
                <figcaption>Shumazu Koji</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Jonh Wick/Rina Sawayama - Akira.jpeg" />
                <!--Link da foto do personagem-->
                <figcaption> Rina Sawayama </figcaption>
                <figcaption>Akira</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Jonh Wick/Scott Adkins - Killa.jpeg" />
                <!--Link da foto do personagem-->
                <figcaption> Scott Adkins</figcaption>
                <figcaption>Killa</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Jonh Wick/Bridget Moynahan - Helen.jpg" />
                <!--Link da foto do personagem-->
                <figcaption> Bridget Moynahan</figcaption>
                <figcaption>Helen</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Jonh Wick/Natalia Tena - Katia.jpeg" />
                <!--Link da foto do personagem-->
                <figcaption> Natalia Tena</figcaption>
                <figcaption>Katia</figcaption>
            </figure>
        </div>
    </div>

</body>

</html>