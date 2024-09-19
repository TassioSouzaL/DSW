<?php

include_once 'FilmesBean.php';

class FilmesDAO{

  function inserir_filme($f_bean){
    $conexao = new PDO("mysql:dbname=filmes;localhost","root",""); 
    $comando = $conexao->prepare("insert into filmes (nome, genero, produtora) VALUES ('$f_bean->filme','$f_bean->genero','$f_bean->produtora');");
    return $comando->execute();
}

function visualizar_dados(){
  $conexao = new PDO("mysql:dbname=filmes;localhost","root",""); //Estabelece a conexão
  $comando = $conexao->prepare("select * from filmes");
  $comando->execute();
  $filme = $comando->fetchAll(PDO::FETCH_ASSOC);
  foreach ($filme as $key => $value){
    echo "<tr>";
    echo "<td>".$value['nome']."</td>";
    echo "<td>".$value['ordem']."</td>";
    echo "<td>".$value['genero']."</td>";
    echo "<td>".$value['produtora']."</td>";
    echo "</tr>";
  }
}

function remover_filmes($f_bean){
  $conexao = new PDO("mysql:dbname=filmes;localhost","root",""); //Estabelece a conexão
  $comando = $conexao->prepare("delete from filmes where nome =  '$f_bean->filme';");
  return $comando->execute(); //Executamos a instrução SQL | retorna true se deu certo | retorna false se deu errado
}
   // Função de atualização de filme no banco de dados
   function atualizar_filme($f_bean){
    $conexao = new PDO("mysql:dbname=filmes;localhost","root","");
    // Query de atualização - atualiza os campos com base no nome do filme
    $comando = $conexao->prepare("UPDATE filmes SET genero = :genero, produtora = :produtora WHERE nome = :nome");
    
    // Definindo os parâmetros para a query
    $comando->bindParam(':nome', $f_bean->filme);
    $comando->bindParam(':genero', $f_bean->genero);
    $comando->bindParam(':produtora', $f_bean->produtora);

    // Executando a query e retornando se deu certo ou não
    return $comando->execute();
}

}


?>