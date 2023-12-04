<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Titulo da Pagina-->
    <title>Bonnie e Clyde</title>
    <script src="https://kit.fontawesome.com/73affd7905.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="Paginas de Filmes/Imagens/InfoFilmes aba.png">
</head>

<body>
    <link rel="stylesheet" href="Pagina-Bonnei-e-Clyde.css">
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

    </nav>
    <!--Titulo e imagem do Filme-->
    <h1 class="Titulo">Bonnie e Clyde</h1>
    <main>
        <img src="Imagens/filmes/Bonnie e Clyde.png" id="Img Narnia" class="banner" />
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
            Data de lançamento: 08/12/2013
        </h4>
        <br>

        <h4>
            Diretor: Bruce Beresford
        </h4>
        <br>

        <h4>
            Gêneros: Biografia, Drama, Policial
        </h4>
        
        <!--Descrição-->
        <h4 style="padding-top: 5px;">
            Sinopse:
        </h4>

        <div class="sinopse">
            <p class="p1">
                a história apresenta a trajetória de Bonnie, uma garçonete que se muda para o Texas com a mãe Emma, uma
                costureira que está em busca de uma vida melhor em plena era da Grande Depressão. Lá ela conhece Clyde
                que, na companhia do irmão Buck e de outros, forma uma gangue para praticar diversos assaltos a pequenos
                bancos, lojas e postos de gasolinas. Ao se unir ao grupo, Bonnie também passa a ser procurada pela
                polícia, liderada por Frank Hunter, um patrulheiro do Texas.<br>
                Clyde Barrow e Bonnie Parker ficaram conhecidos por seus roubos a bancos, lojas e postos de gasolina,
                além de vários assassinatos cometidos durante as fugas. O casal terminou sendo morto em 1934 por
                policiais em uma emboscada, Bonnie com apenas 23 anos e Clyde com 25.
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
                <img class="personagem" src="Imagens/filmes/Bonnie e Clyde - Cast/Emile Hirsch - Clyde.jpg" />
                <figcaption>Emile Hirsch</figcaption>
                <figcaption>Clyde Barrow</figcaption>
            </figure>
        </div>

        <div>
            <figure>
                <img class="personagem" src="Imagens/filmes/Bonnie e Clyde - Cast/Holliday Grainger - Bonnie.jpg" />
                <figcaption>Holliday Grainger</figcaption>
                <figcaption>Bonnie Paker</figcaption>
            </figure>
        </div>

        <div>
            <figure>
                <img class="personagem" src="Imagens/filmes/Bonnie e Clyde - Cast/William Hurt - Frank Hamer.jpg" />
                <figcaption>William Hurt</figcaption>
                <figcaption>Frank Hamer</figcaption>
            </figure>
        </div>

        <div>
            <figure>
                <img class="personagem" src="Imagens/filmes/Bonnie e Clyde - Cast/Austin Hebert - Ted hinton.jpg" />
                <figcaption>Austin Hébert</figcaption>
                <figcaption>Ted Hinton</figcaption>
            </figure>
        </div>

        <div>
            <figure>
                <img class="personagem" src="Imagens/filmes/Bonnie e Clyde - Cast/Dale Dicky - Cummie Barrow.jpeg" />
                <figcaption>Dale Dicky</figcaption>
                <figcaption>Cummie Barrow</figcaption>
            </figure>
        </div>

        <div>
            <figure>
                <img class="personagem" src="Imagens/filmes/Bonnie e Clyde - Cast/ELIZABETH REASER - J.A Lane.jpg" />
                <figcaption>Elizabeth Reaser</figcaption>
                <figcaption>J.A Lane</figcaption>
            </figure>
        </div>

        <div>
            <figure>
                <img class="personagem" src="Imagens/filmes/Bonnie e Clyde - Cast/Holly Hunter - Emma Parker.jpg" />
                <figcaption>Holly Hunter</figcaption>
                <figcaption>Emma Parker</figcaption>
            </figure>
        </div>

        <div>
            <figure>
                <img class="personagem" src="Imagens/filmes/Bonnie e Clyde - Cast/Lane Garrison - Buck Barrow.jpg" />
                <figcaption>Lane Garrison </figcaption>
                <figcaption>Buck Barrow</figcaption>
            </figure>
        </div>

        <div>
            <figure>
                <img class="personagem" src="Imagens/filmes/Bonnie e Clyde - Cast/Sarah Hyland - Blanche Barrow.jpg" />
                <figcaption>Sarah Hyland</figcaption>
                <figcaption>Blanche Barrow</figcaption>
            </figure>
        </div>
    </div>

</body>

</html>