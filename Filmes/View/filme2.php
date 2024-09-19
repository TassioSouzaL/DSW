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
<link rel="stylesheet" type="text/css" href="filme2.css" />
    <title>Deus não está morto: Uma luz na escuridão</title>

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
            'titulo' => 'Deus Não Está Morto: Luz na Escuridão',
            'sinopse' => 'GEm meio a um intenso debate sobre se uma universidade estadual deve ter uma igreja em seu campus, o pastor Dave (David R. White)
            é surpreendido com um incêndio na igreja Saint James, no qual morre seu grande amigo, o reverendo Jude (Benjamin A. Onyango).
            O incidente foi provocado por Adam (Mike C. Manning), que atirou um tijolo em uma janela da igreja após brigar com a namorada
            (Samantha Boscarino). A situação acirra o debate, ainda mais devido à proposta da universidade em comprar o terreno usado pela
            igreja para ali construir um centro educacional. Decidido a lutar até o fim, Dave busca ajuda com seu irmão Pearce (John Corbett), que é advogado.',
            'video_url' => 'Deus_nao_esta_morto_uma_luz_na_escuridao.mp4'
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