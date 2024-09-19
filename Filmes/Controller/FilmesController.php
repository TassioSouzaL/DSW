<?php

include_once '../Model/FilmesDAO.php';

class FilmesController {

    private $f_dao;

    function __construct(){
        $this->f_dao = new FilmesDAO;
    }

    function inserir_filme($f_bean){
        return $this->f_dao->inserir_filme($f_bean);
    }
    
    function remover_filmes($f_bean){
        return $this->f_dao->remover_filmes($f_bean);
    }

    function visualizar_dados(){
        return $this->f_dao->visualizar_dados();
    }
    
    function atualizar_filme($f_bean){
        return $this->f_dao->atualizar_filme($f_bean);
    }


}

?>