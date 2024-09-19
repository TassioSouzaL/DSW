<?php

class FilmesBean {

    public $filme;
    public $ordem;
    public $genero;
    public $produtora;

    function __construct($f, $g, $p){
        $this->filme = $f;
        $this->genero = $g;
        $this->produtora = $p;
    }

    function imprime(){
        echo "<br>Filmes: $this->filme";
        echo "<br>Ordem: $this->ordem";
        echo "<br>Gênero: $this->genero";
        echo "<br>Produta: $this->produtora";
    }

}

?>