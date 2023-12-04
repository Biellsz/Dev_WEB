<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>

<!DOCTYPE hmtl>
<!-- saved from url=(0095)file:///C:/Rapahel/UniRuy/Desenvolvimento%20Web/Projeto%20Vitor/Projeto%20HTML%20-%20Vitor.html -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css" id="operaUserStyle"></style>
    <script src="https://kit.fontawesome.com/73affd7905.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="Paginas de Filmes/Imagens/InfoFilmes aba.png"> <!--Icone -->
    <title>Info Filmes </title>
</head>

<body>
    <hmtl lang="pt-br">

        <body>
            <link rel="stylesheet" href="Home.css">

            <!--Barra de Navegação-->

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
        
                    <li><a href="sair.php" class="btn btn-danger me-5">Sair</a></li>
        
                </ul>
        
            </nav>

            <!-- Cartaz de Filme em Destaque -->

            <br>
            <br>
            <a href="Paginas de Filmes/Pagina-John-wick.html"> <img src="Paginas de Filmes/Imagens/filmes/john_wick.png"
                    class="destaque" /></a>
                
                <!-- Outros Filmes -->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="cartazes ">
                    <!-- Cartaz Bonnie e Clyde-->
                    <div>
                        <figure>
                            <a href="Paginas de Filmes/Pagina-Bonnei-e-Clyde.html"><img
                                    src="Paginas de Filmes/Imagens/filmes/Bonnie e Clyde.png" alt=""></a>
                            <!-- Para que pagina-->

                            <figcaption>Bonnie e Clyde </figcaption>
                        </figure>
                    </div>

                    <!-- Cartaz Divertidamente-->
                    <div>
                        <figure>
                            <a href="Paginas de Filmes/Pagina-Divertidamente.html"><img
                                    src="Paginas de Filmes/Imagens/filmes/Divertidamente.png" alt=""></a>
                            <!-- Para que pagina-->

                            <figcaption>Divertidamente</figcaption>
                        </figure>
                    </div>

                    <!-- Cartaz Eu sou a Lenda-->
                    <div>
                        <figure>
                            <a href="Paginas de Filmes/Pagina-Eu-Sou-a-Lenda.html"><img
                                    src="Paginas de Filmes/Imagens/filmes/Eu sou a Lenda.png" alt=""></a>

                            <figcaption>Eu sou a Lenda</figcaption>
                        </figure>
                    </div>

                    <!-- Cartaz Homem aranha no aranha verso-->
                    <div>
                        <figure>
                            <a href="Paginas de Filmes/Pagina-Homem-Aranha.html"><img
                                    src="Paginas de Filmes/Imagens/filmes/Homem aranha.png" alt=""></a>
                            <figcaption>Homem Aranha<br> No aranhaverso </figcaption>
                        </figure>
                    </div>

                    <!-- Cartaz Narnia-->
                    <div>
                        <figure>
                            <a href="Paginas de Filmes/Pagina-Narnia.html"><img
                                    src="Paginas de Filmes/Imagens/filmes/Narnia.png" alt=""></a>

                            <figcaption>As Cronicas de Narnia:<br> O Leão, a Feiticeira e o guarda-roupa </figcaption>
                        </figure>
                    </div>

                </div>
                <hgroup>
                    <!--<h1> Info Filmes</h1>
                <h2>venha ver tudo sobre filmes e seres</h2>-->
                </hgroup>

                </div>
        </body>

</html>