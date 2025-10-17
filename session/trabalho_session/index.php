<?php 

require_once(__DIR__ . "/service/PokemonService.php");
require_once(__DIR__ . "/model/Pokemon.php");

$x = $_GET['x'];

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
            <a class="btn btn-success" href="/samuel/lpw/session/trabalho_session/view/criar.php">
                Criar pokémon sessão</a>

            <a class="btn btn-primary" href="/view/alterar.php?">
                Incrementar pokémon sessão</a>

            <a class="btn btn-danger" href="/view/remover.php">
                Remover sessão</a>
        </div>

        <div class="mt-5">
            <p style="font-weight: bold;">Nome do Pokémon: <?php $_SESSION[SESSAO_POKEMON_LIST][$x]->getNome(); ?></p>
            <p style="font-weight: bold;">Tipo do Pokémon: <?php $_SESSION[SESSAO_POKEMON_LIST][$x]->getTipo(); ?></p>
        </div>

            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>


