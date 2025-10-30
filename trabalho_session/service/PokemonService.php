<?php 

require_once(__DIR__ . "/../model/Pokemon.php");
require_once(__DIR__ . "/../util/config.php");


class PokemonService{

    function alterarPokemon(){
        if(session_status() != PHP_SESSION_ACTIVE){
            return false;
        } else{
            return true;
        }
    }

    public function apagarDadosSessao(){
        session_start();

        //Remover dados da sessão

        session_unset();

        //Destroi dados da sessão

        session_destroy();
    }

    public function iniciarSessao(){
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
            return true;
        } else{
            return false;
        }
    }
}
