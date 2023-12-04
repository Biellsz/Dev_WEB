<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/73affd7905.js" crossorigin="anonymous"></script>
    <!--Titulo da Pagina--> 
    <title>As Crônicas de Narnia</title>

    <link rel="stylesheet" href="Pagina-Narnia.css">
    <link rel="icon" type="image/x-icon" href="Paginas de Filmes/Imagens/InfoFilmes aba.png">
</head>

<body>
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
    <h1 class="Titulo">As Crônicas de Nárnia</h1>
    <main>
        <img src="Imagens/filmes/Narnia.png" id="Img Narnia" class="banner" />

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
            Data de lançamento: 09/12/2005
        </h4>
        <br>

        <h4>
            Diretor: Andrew Adamson
        </h4>
        <br>

        <h4>
            Gêneros: Fantasia, Aventura, Familia
        </h4>
        <br>
        <!--Descrição-->
        <h4>
            Sinopse:
        </h4>

        <div class="sinopse">
            <p class="p1">
                Durante os bombardeios da Segunda Guerra Mundial de Londres, quatro irmãos ingleses são enviados para
                uma
                casa de campo onde eles estarão seguros.

                Um dia, Lucy encontra um guarda-roupa que a transporta para um mundo mágico chamado Nárnia. Depois de
                voltar, ela logo volta a Nárnia
                com seus irmãos, Peter e Edmund, e sua irmã, Susan. Lá eles se juntam ao leão mágico, Aslan, na luta
                contra
                a Feiticeira Branca.
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
    <h2  style="padding-left: 10px;">
        ELENCO:
    </h2>
    <br>
    <div class="elenco ">
        <div>
            <figure>
                <img class="personagem" src="Imagens/filmes/Narnia - Cast/Georgia Henley (Lucia).jpg" />
                <figcaption>Georgia Henley</figcaption>
                <figcaption> Lúcia </figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Narnia - Cast/Anna Popplewell ( Susana).jpg" />
                <figcaption>Anna Popplewell</figcaption>
                <figcaption>Susana</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Narnia - Cast/William Moseley (Pedro).jpg" />
                <figcaption>William Moseley</figcaption>
                <figcaption> Pedro</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Narnia - Cast/Skandar Keynes (Edmundo).jpg" />
                <figcaption>Skandar Keynes</figcaption>
                <figcaption>Edmundo</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Narnia - Cast/Tilda Swinton (Feiticeira).jpg" />
                <figcaption> Tilda Swinton</figcaption>
                <figcaption> Feiticeira Branca</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Narnia - Cast/James McAvoy (Sr. Tumnus).jpg" />
                <figcaption> James McAvoy</figcaption>
                <figcaption>Sr.Tumnus</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Narnia - Cast/James Cosmo - Papai Noel.jpg" />
                <figcaption> James Cosmo</figcaption>
                <figcaption>Papai Noel</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Narnia - Cast/Jim Broadbent ( Digory Kirke).jpg" />
                <figcaption> Jim Broadbent</figcaption>
                <figcaption>Digory Kirke</figcaption>
            </figure>
        </div>

        <div>
            <figure><img class="personagem" src="Imagens/filmes/Narnia - Cast/Liam Neeson (Aslam).jpeg" />
                <figcaption> Liam Neeson</figcaption>
                <figcaption>Aslam</figcaption>
            </figure>
        </div>
    </div>

</body>

</html>