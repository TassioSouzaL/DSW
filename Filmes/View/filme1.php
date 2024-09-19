<?php

session_start();


if(!isset($_SESSION['login'])){
    header('Location:login.html');
}


$logado = $_SESSION['login'];

include_once '../Controller/FilmesController.php';
$f_controller = new FilmesController();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="filme1.css" />
    <title>Deus não está morto 2</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


  <div class="menu">
    <body>
    <nav class="menu-horizontal">
    <ul>
	  	<li><a href="./Principal.php">Home</a></li>
		    <li><a href="#">Sobre</a></li>
		<li><a href="#">Contato</a></li>
</ul>
</nav>
</div>
    
<body>
<div class = "filmeplay">
    <?php
        // Dados do filme
        $filme = array(
            'titulo' => 'Deus Não Está Morto 2',
            'sinopse' => 'Grace Wesley (Melissa Joan Hart) é uma professora cristã que, ao responder uma pergunta feita por uma de suas alunas,
            Brooke (Hayley Orrantia), acaba falando sobre Jesus Cristo em plena sala de aula. Tal situação lhe rende um processo
            administrativo impulsionado pela diretora Kinney (Robin Givens), que não quer que assuntos religiosos sejam tratados
            dentro da escola. Após se recusar a pedir desculpas pelo ocorrido, Grace é processada pelos pais de Brooke, que acreditam
            que a polêmica em torno do julgamento possa facilitar a entrada da garota em uma universidade de prestígio.',
            'video_url' => 'Deus_nao_esta_morto_2.mp4'
        );
    ?>
    </div>

    <h1><?php echo $filme['titulo']; ?></h1>

    <video controls>
        <source src="<?php echo $filme['video_url']; ?>" type="video/mp4">
        Seu navegador não suporta a reprodução de vídeo.
    </video>

    <h2>Sinopse</h2>
    <p><?php echo $filme['sinopse']; ?></p>
</body>
    </head>
</html>