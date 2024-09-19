<?php


include_once '../Model/FilmesBean.php';
include_once './FilmesController.php';

$operacao = $_GET['operacao'];

if ($operacao == "inserir_filme"){

    $filme = $_POST['filme'];
    $genero = $_POST['genero'];
    $produtora = $_POST['produtora'];


    $fbean = new FilmesBean($filme, $genero, $produtora);
    

    $fcont = new FilmesController;
    $resultado = $fcont->inserir_filme($fbean);

    if($resultado){
        echo "Informações inseridas";
        ?>
        <script type="text/javascript">
        alert('Sucesso');
        window.location="../View/Principal.php";
        </script>
        <?php
     }
     else {
         echo "Houve problema";
         ?>
         <script type="text/javascript">
         alert('Erro na inserção!');
         window.location="../View/Principal.php";
         </script>
         <?php
     }
 }
 
 if($operacao == "remover_filmes"){
     echo "<br>Formulário de remover dados<br>";
     $filme = $_POST['nome'];
     #echo "<br>CRM: ".$crm."<br>";
     $fbean_remover = new FilmesBean(null,null,null);
     $fbean_remover->filme = $filme;
 
     $fcont_remover = new FilmesController();
     $resul_rem = $fcont_remover->remover_filmes($fbean_remover);
     if($resul_rem){
         ?>
         <script>
             alert('Informação Removida!');
             window.location="../View/Principal.php";
         </script>
         <?php
     }
     else {
         ?>
         <script type="text/javascript">
         alert('Erro na remoção!');
         window.location="../View/Principal.php";
         </script>
         <?php
     }
     if($operacao == "atualizar_filme"){
        #echo "Formulário de atualizar dados";
        $filme = $_POST['filme'];
        $genero = $_POST['genero'];
        $produtora = $_POST['produtora'];
        #echo "<br>CRM: ".$crm."Nome: ".$nome." Sexo: ".$sexo." Esp:".$esp;
        $fbean_atualizar = new FilmesBean($filme,$genero,$produtora); //Atualizo usando o construtor
        $fbean_atualizar->filme = $filme; //Atualiza de maneira manual
    
        $fcont_atualizar = new FilmesController();
        $resul_atu = $fcont_atualizar->atualizar_filme($fbean_atualizar);
        if($resul_atu){
            ?>
            <script>
                alert('Informação Atualizada!');
                window.location="../View/Principal.php";
            </script>
            <?php
        }
        else {
            ?>
            <script type="text/javascript">
            alert('Erro na Atualização!');
            window.location="../View/Principal.php";
            </script>
            <?php
        }
    
    
    
    }
    
    
}
    
    ?>