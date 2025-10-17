<?php

require_once(__DIR__ . "/../service/PokemonService.php");
require_once(__DIR__ . "/../model/Pokemon.php");
$x = 0;

class PokemonControl {

    private PokemonService $pokemonService;
    private PokemonDAO $pokemonDAO;

    public function __construct() {
       $this->pokemonService = new PokemonService();
       $this->pokemonDAO = new PokemonDAO(); 
    }

    public function iniciarSessao($pokemon){
        $resultado = $this->pokemonService->iniciarSessao($pokemon);

        if(! $resultado){
            return false;
        } else{
            return true;
        }
    }

    public function alterarPokemon(){
        $resultado = $this->pokemonService->alterarPokemon();
        if($resultado) {
            return ;
        } else{
            return "A sessão deve ser aberta antes de altera-lá!";
        }
    }


}
    