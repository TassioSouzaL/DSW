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
<link rel="stylesheet" type="text/css" href="filme3.css" />
    <title>Power Ranger: Agora e Sempre</title>
</head>
  
<div class="menu">
    <body>
    <nav class="menu-horizontal">
    <ul>
	  	<li><a href="./Principal.php">Home</a></li>
		    <li><a href="./sobre.php">Sobre</a></li>
		<li><a href="./contato.php">Contato</a></li>
</ul>
</nav>
</div>
<body>
<?php
        // Dados do filme
        $filme = array(
            'titulo' => 'Power Ranger: Agora e Sempre',
            'sinopse' => 'Uma homenagem a uma geração de fãs da série, que é uma das sagas mais queridas da cultura pop. Power Rangers: Agora e Sempre 
            é o primeiro reencontro do elenco original da icônica série. Nesta nova aventura, uma jovem heroína assume seu lugar de direito
            entre os Power Rangers, que ficam cara a cara com uma ameaça familiar do passado. Em meio a uma crise global, eles são chamados
            mais uma vez para serem os heróis de que o mundo precisa. Quando Trini, o ranger amarelo é morto, os Mighty Morphing Power Rangers
            são chamados de volta ao jogo quase 30 anos depois da chegada de seus sucessores. Rita Repulsa consegue retornar como um robô superpoderoso
            em busca de vingança e os rangers devem se reunir uma última vez para derrotar seu antigo inimigo ou serão exterminados definitivamente.
            Mas ao se tornar um Ranger, você sempre fará parte da família..',
            'video_url' => 'power_ranger.mp4'
        );
    ?>

    <h1><?php echo $filme['titulo']; ?></h1>

    <video controls>
        <source src="<?php echo $filme['video_url']; ?>" type="video/mp4">
        Seu navegador não suporta a reprodução de vídeo.
    </video>

    <h2>Sinopse</h2>
    <p><?php echo $filme['sinopse']; ?></p>
</body>
</html>