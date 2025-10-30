<?php

require_once(__DIR__ . "/../control/PokemonControl.php");
require_once(__DIR__ . "/../model/Pokemon.php");

$pokemonControl = new PokemonControl();
$result = $pokemonControl->apagarDadosSessao();

header("Location: /SESSION_TRABALHO-main/trabalho_session/index.php");