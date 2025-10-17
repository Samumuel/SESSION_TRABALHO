<?php

require_once(__DIR__ . "/../control/PokemonControl.php");
require_once(__DIR__ . "/../model/Pokemon.php");

$pokemonList = [];

$pokemon = new Pokemon();
$pokemon->setNome("Charmander");
$pokemon->setTipo("Fogo");
$pokemonList[] = $pokemon;

$pokemon = new Pokemon();
$pokemon->setNome("Charmeleon");
$pokemon->setTipo("Fogo");
$pokemonList[] = $pokemon;

$pokemon = new Pokemon();
$pokemon->setNome("Charizard");
$pokemon->setTipo("Fogo");
$pokemonList[] = $pokemon;

$pokemon = new Pokemon();
$pokemon->setNome("Bulbasaur");
$pokemon->setTipo("Planta");
$pokemonList[] = $pokemon;

$pokemon = new Pokemon();
$pokemon->setNome("Ivysaur");
$pokemon->setTipo("Planta");
$pokemonList[] = $pokemon;

$pokemon = new Pokemon();
$pokemon->setNome("Venusaur");
$pokemon->setTipo("Planta");
$pokemonList[] = $pokemon;

$pokemonControl = new PokemonControl();
$result = $pokemonControl->iniciarSessao();

if ($result) {
    $_SESSION[SESSAO_POKEMON_LIST] = $pokemonList;
    print_r($_SESSION[SESSAO_POKEMON_LIST]);
    header("Location: samuel/lpw/session/trabalho_session/index.php?x=0");
    exit;
} else {
    echo "A sessão já está iniciada!";
}
