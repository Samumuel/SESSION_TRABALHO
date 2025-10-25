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

$_SESSION[SESSAO_POKEMON_LIST] = $pokemonList;


if ($result) {
    header("Location: /LPW/trabalho-session/trabalho_session/index.php?x=$x&msg=$msg");
}