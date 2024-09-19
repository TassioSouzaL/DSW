<?php

$login = $_POST['login'];
$senha = $_POST['senha'];
$c_senha = $_POST['c_senha']; 


if($senha == $c_senha){


    $conexao = new PDO("mysql:dbname=filmes;localhost","root","");


    $sql = "insert into usuario value ('$login',md5('$senha'))";

    $comando = $conexao->prepare($sql);
    $resultado = $comando->execute();
    

    if ($resultado){

        ?>
        <script>

            alert('Sucesso! Usuário cadastrado!');

            window.location="../View/login.html";
        </script>

        <?php

    }
    else {

        ?>
        <script>

            alert('Erro! Contate o ADM');

            window.location="../View/login.html";
        </script>
        <?php
        }
    }
    else {
        ?>
        <script>

            alert('Senhas não conferem');

            window.location="../View/cadastro.html";
        </script>
        <?php
    }
    
?>