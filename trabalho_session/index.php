<?php 

require_once(__DIR__ . "/service/PokemonService.php");
require_once(__DIR__ . "/model/Pokemon.php");

session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contador de pokémon utilizando sessão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        <h2>Contador utilizando sessão</h2>

        <div class="mt-4">
            <a class="btn btn-success" href="/SESSION_TRABALHO-main/trabalho_session/view/criar.php?<?php 
            if(isset($_GET['x'])) {
                echo "msg=SJI&x=" . $_GET['x'];
            } else {
                echo "x=0&msg=xx";
            }
            ?>">
                Iniciar sessão pokémon</a>

            <a class="btn btn-primary" href="/SESSION_TRABALHO-main/trabalho_session/view/alterar.php?<?php 
            if(isset($_GET['x'])) {
                echo "x=" . $_GET['x'] ."&msg=xx";
            } else {
                echo "x=-1&msg=SNI";
            }
            ?>">
                Incrementar sessão pokémon</a>

            <a class="btn btn-danger" href="/SESSION_TRABALHO-main/trabalho_session/view/excluir.php">
                Remover sessão pokémon</a>
        </div>

        <div class="mt-5">
            <?php if($_SESSION[SESSAO_POKEMON_LIST] != null) {
                echo "
                <table class='table table-striped p-3 rounded-4 border border-5 border-primary bg-light'>
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                </tr>";
            } ?>
            <?php
                if(isset($_GET['x'])){
                    if($_GET['x'] < 6 and $_GET['msg'] == "xx"){
                        foreach ($_SESSION[SESSAO_POKEMON_LIST] as $pl){
                            if($pl->getTipo() == "Fogo"){
                                $link = "https://www.lmcorp.com.br/arquivos/img/assets/tcg_2/icons/types/fire.svg";
                            } else{
                                $link = "https://www.lmcorp.com.br/arquivos/img/assets/tcg_2/icons/types/grass.svg";
                            }
                            echo "
                            <tr>
                                <td style='font-weight: bold;'>" . $pl->getNome() . "</td>
                                <td style='font-weight: bold;'> <img src= " . $link . "> </td>
                            </tr>";
                        }
                    }else if($_GET['x'] < 6 and $_GET['msg'] == "SJI"){
                            echo "<p style='font-weight : bold;'> Sessão já iniciada! </p>";
                        foreach ($_SESSION[SESSAO_POKEMON_LIST] as $pl){
                            if($pl->getTipo() == "Fogo"){
                                $link = "https://www.lmcorp.com.br/arquivos/img/assets/tcg_2/icons/types/fire.svg";
                            } else{
                                $link = "https://www.lmcorp.com.br/arquivos/img/assets/tcg_2/icons/types/grass.svg";
                            }
                            echo "
                            <tr>
                                <td style='font-weight: bold;'>" . $pl->getNome() . "</td>
                                <td style='font-weight: bold;'> <img src= " . $link . "> </td>
                            </tr>";
                        }
                    }else{
                        echo "<p style='font-weight : bold;'> Todos os pokémons foram exibidos! </p>";
                        foreach ($_SESSION[SESSAO_POKEMON_LIST] as $pl){
                            if($pl->getTipo() == "Fogo"){
                                $link = "https://www.lmcorp.com.br/arquivos/img/assets/tcg_2/icons/types/fire.svg";
                            } else{
                                $link = "https://www.lmcorp.com.br/arquivos/img/assets/tcg_2/icons/types/grass.svg";
                            }
                            echo "
                            <tr>
                                <td style='font-weight: bold;'>" . $pl->getNome() . "</td>
                                <td style='font-weight: bold;'> <img src= " . $link . "> </td>
                            </tr>";
                        }
                    }

                } else{
                    echo "<p styl='font-weight : bold;'> Sessão não iniciada! </p>";
                }
            ?>
        </table>
        </div>

            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
    @font-face {
        font-family: 'Pokemon Classic';
        src: url('fonts/Pokemon-Classic.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    body {
        font-family: 'Pokemon Classic', sans-serif;
        background-image: url("https://pokedle.net/img/Background.b373eb68.png");
        background-position: center top;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
</body>

</html>


