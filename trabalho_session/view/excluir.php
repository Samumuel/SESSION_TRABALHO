<?php

require_once(__DIR__ . "/../control/PokemonControl.php");
require_once(__DIR__ . "/../model/Pokemon.php");

$pokemonControl = new PokemonControl();
$result = $pokemonControl->apagarDadosSessao();

header("Location: /LPW/trabalho-session/trabalho_session/index.php");