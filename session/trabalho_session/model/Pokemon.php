<?php 

class Pokemon {

    private $nome;
    private $tipo;

    public function __construct($nome, $tipo) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        echo "Novo pokémon: {$this->nome} Tipo: {$this->tipo}\n";
    }

    public function setNome()
    {
        return $this->nome;
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function setTipo()
    {
        return $this->tipo;
    }


    public function getTipo()
    {
        return $this->tipo;
    }


}