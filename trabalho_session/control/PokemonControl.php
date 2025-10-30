<?php

require_once(__DIR__ . "/../service/PokemonService.php");
require_once(__DIR__ . "/../model/Pokemon.php");
$x = 0;

class PokemonControl {

    private PokemonService $pokemonService;

    public function __construct() {
        $this->pokemonService = new PokemonService();        
    }

    public function iniciarSessao(){
        $resultado = $this->pokemonService->iniciarSessao();

        if(! $resultado){
            return false;
        } else{
            return true;
        }
    }

    public function alterarPokemon(){
        $resultado = $this->pokemonService->alterarPokemon();
        if($resultado) {
            return true;
        } else{
            return "A sessão deve ser aberta antes de altera-lá!";
        }
    }

    public function apagarDadosSessao(){
        $this->pokemonService->apagarDadosSessao();
    }


}