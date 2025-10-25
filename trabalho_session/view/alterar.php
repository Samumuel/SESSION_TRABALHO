<?php 

require_once(__DIR__ . "/../control/PokemonControl.php");
require_once(__DIR__ . "/../model/Pokemon.php");

$x = $_GET['x'];
$msg = $_GET['msg'];

$pokemonControl = new PokemonControl();
$result = $pokemonControl->alterarPokemon();

if ($result and $msg = "xx" and $x > -1) {
    $x = $x + 1;
    header("Location: /LPW/trabalho-session/trabalho_session/index.php?x=$x&msg=$msg");
} else if($msg ="SNI" and $x = -1){
    header("Location: /LPW/trabalho-session/trabalho_session/index.php?msg=$msg");
} else {
    header("Location: /LPW/trabalho-session/trabalho_session/index.php?x=$x&msg=$msg");
}



