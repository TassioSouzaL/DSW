<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="sobre.css" />  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

  <div class="menu">
    <body>
    <nav class="menu-horizontal">
    <ul>
	  	<li><a href="./Principal.php">Home</a></li>
		    <li><a href="./sobre.php">Sobre</a></li>
		<li><a href="#">Contato</a></li>
</ul>
</nav>
</div>
<script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>

<body> 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Sobre o Site</a></li>
    <li><a href="#tabs-2">Objetivos</a></li>
    <li><a href="#tabs-3">Patrocinadores</a></li>
  </ul>
  <div id="tabs-1">
    <p>VAGAMENTE filmes é um site onde contêm filmes, séries e animes variados.</p>
  </div>
  <div id="tabs-2">
    <p>Nosso objetivo é levar entretenimento para você e toda sua família!.</p>
  </div>
  <div id="tabs-3">
    <p>Barão R.C Enterprise.</p>
    <p>Oferecimento, Oferê Cimentos.</p>
    <p>Funerária Santa Luzia, sua morte nossa alegria.</p>
    <p>Oferecimento, Gustavo Dimas, o sertanejo do amor.</p>
  </div>
</div>
 
 
</body>
</html>