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
            <a class="btn btn-success" href="/LPW/trabalho-session/trabalho_session/view/criar.php?<?php 
            if(isset($_GET['x'])) {
                echo "msg=SJI&x=" . $_GET['x'];
            } else {
                echo "x=0&msg=xx";
            }
            ?>">
                Iniciar sessão pokémon</a>

            <a class="btn btn-primary" href="/LPW/trabalho-session/trabalho_session/view/alterar.php?<?php 
            if(isset($_GET['x'])) {
                echo "x=" . $_GET['x'] ."&msg=xx";
            } else {
                echo "x=-1&msg=SNI";
            }
            ?>">
                Incrementar sessão pokémon</a>

            <a class="btn btn-danger" href="/LPW/trabalho-session/trabalho_session/view/excluir.php">
                Remover sessão pokémon</a>
        </div>

        <div class="mt-5">
            <?php 
                if(isset($_GET['x'])){
                    if($_GET['x'] < 6 and $_GET['msg'] == "xx"){
                        $pokemon = $_SESSION[SESSAO_POKEMON_LIST][$_GET['x']];
                        echo "<p style='font-weight: bold;'>Nome do Pokémon: " . $pokemon->getNome() . "</p>";
                        echo "<p style='font-weight: bold;'>Tipo do Pokémon: " . $pokemon->getTipo() . "</p>";
                    }else if($_GET['x'] < 6 and $_GET['msg'] == "SJI"){
                            echo "<p style='font-weight : bold;'> Sessão já iniciada! </p>";
                            $pokemon = $_SESSION[SESSAO_POKEMON_LIST][$_GET['x']];
                            echo "<p style='font-weight: bold;'>Nome do Pokémon: " . $pokemon->getNome() . "</p>";
                            echo "<p style='font-weight: bold;'>Tipo do Pokémon: " . $pokemon->getTipo() . "</p>";
                    }else{
                        echo "<p style='font-weight : bold;'> Todos os pokémons foram exibidos! </p>";
                        $pokemon = $_SESSION[SESSAO_POKEMON_LIST][5];
                        echo "<p style='font-weight: bold;'>Nome do Pokémon: " . $pokemon->getNome() . "</p>";
                        echo "<p style='font-weight: bold;'>Tipo do Pokémon: " . $pokemon->getTipo() . "</p>";
                    }
                } else{
                    echo "<p styl='font-weight : bold;'> Sessão não iniciada! </p>";
                }
            ?>
        </div>

            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>


