<?php
session_start();

#Captura os dados do formulário HTML
$login = $_POST['login'];
$senha = $_POST['senha'];

#Estabelece a conexão com o Banco de Dados
$conexao = new PDO("mysql:dbname=filmes;localhost","root","");

#Cria a consulta SQL
$sql = "select * from usuario where login = '$login' and senha = md5('$senha');";

#Executa a consulta SQL
$comando = $conexao->prepare($sql);
$comando->execute();

#Os dados retornados ficam armazenados em resultado
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);


$achou = count($resultado);
if ($achou == 0){
    

    ?>
    <script>

        alert('Login e/ou senha inválidos!');

        window.location="../View/login.html";
    </script>

    <?php

}
else {

    $_SESSION['login'] = $login;
    
    session_write_close();
   
   ?>
    <script>

        alert('Sucesso!');

        window.location="../View/Principal.php";
    </script>
     <?php
}
session_destroy();
?>