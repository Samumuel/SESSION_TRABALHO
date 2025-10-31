<?php

require_once(__DIR__ . "/../control/PokemonControl.php");
require_once(__DIR__ . "/../model/Pokemon.php");


$x = $_GET['x'];
$msg = $_GET['msg'];

$pokemonControl = new PokemonControl();
$result = $pokemonControl->iniciarSessao();

$pokemonList = [];

$pokemon = new Pokemon();
$pokemon->setNome("Charmander");
$pokemon->setTipo("Fogo");
$pokemonList[] = $pokemon;



$_SESSION[SESSAO_POKEMON_LIST] = $pokemonList;


if ($result) {
    header("Location: /SESSION_TRABALHO-main/trabalho_session/index.php?x=$x&msg=$msg");
}