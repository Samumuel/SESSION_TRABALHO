<?php 

require_once(__DIR__ . "/../control/PokemonControl.php");
require_once(__DIR__ . "/../model/Pokemon.php");

session_start();

$x = $_GET['x'];
$msg = $_GET['msg'];

$pokemonControl = new PokemonControl();
$result = $pokemonControl->alterarPokemon();

$pokemonList = $_SESSION[SESSAO_POKEMON_LIST];

$pokemons = [
    0 => ["Charmeleon", "Fogo"],
    1 => ["Charizard", "Fogo"],
    2 => ["Bulbasaur", "Planta"],
    3 => ["Ivysaur", "Planta"],
    4 => ["Venusaur", "Planta"]
];

if (isset($pokemons[$x])) {
    $pokemon = new Pokemon();
    $pokemon->setNome($pokemons[$x][0]);
    $pokemon->setTipo($pokemons[$x][1]);
    $pokemonList[] = $pokemon;
}

$_SESSION[SESSAO_POKEMON_LIST] = $pokemonList;

if ($result and $msg == "xx" and $x > -1) {
    $x = $x + 1;
    header("Location: /SESSION_TRABALHO-main/trabalho_session/index.php?x=$x&msg=$msg");
} else if($msg ="SNI" and $x == -1){
    header("Location: /SESSION_TRABALHO-main/trabalho_session/index.php?msg=$msg");
} else {
    header("Location: /SESSION_TRABALHO-main/trabalho_session/index.php?x=$x&msg=$msg");
}



