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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Site de Filmes</title>

  <link rel="stylesheet" type="text/css" href="principal.css" />
  <script src = "../Controller/javascript.js"></script>

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
		<li><a href="./contato.php">Contato</a></li>
</ul>
</nav>
</div>
  <div class="container">
    <h1>VAGAMENTE Filmes - user <?php echo $logado; ?></h1>
    <div class="movies">
      <div class="movie">
        <imagem width="320" height="240" controls="controls">
            <a href="http://localhost/Filmes/View/filme1.php"><img src="DNEM2.jpg" type="jpg" 
            img alt="Deus Não está Morto 2"></a>
          </imagem>
        <h2>Deus Não Está Morto 2</h2>
        <p>Grace Wesley (Melissa Joan Hart) é uma professora cristã que, ao responder uma pergunta feita por uma de suas alunas,
            Brooke (Hayley Orrantia), acaba falando sobre Jesus Cristo em plena sala de aula. Tal situação lhe rende um processo
            administrativo impulsionado pela diretora Kinney (Robin Givens), que não quer que assuntos religiosos sejam tratados
            dentro da escola. Após se recusar a pedir desculpas pelo ocorrido, Grace é processada pelos pais de Brooke, que acreditam
            que a polêmica em torno do julgamento possa facilitar a entrada da garota em uma universidade de prestígio.</p>
      </div>
      
      <div class="movie">
        <imagem width="320" height="240" controls="controls">
            <a href="http://localhost/Filmes/View/filme2.php"><img src="DNEMULNE.jpg" type="jpg" 
            img alt="Deus Não Está Morto: Luz na Escuridão"></a>
          </imagem>
        <h2>Deus Não Está Morto: Luz na Escuridão</h2>
        <p>Em meio a um intenso debate sobre se uma universidade estadual deve ter uma igreja em seu campus, o pastor Dave (David R. White)
            é surpreendido com um incêndio na igreja Saint James, no qual morre seu grande amigo, o reverendo Jude (Benjamin A. Onyango).
            O incidente foi provocado por Adam (Mike C. Manning), que atirou um tijolo em uma janela da igreja após brigar com a namorada
            (Samantha Boscarino). A situação acirra o debate, ainda mais devido à proposta da universidade em comprar o terreno usado pela
            igreja para ali construir um centro educacional. Decidido a lutar até o fim, Dave busca ajuda com seu irmão Pearce (John Corbett), que é advogado.</p>
      </div>
      <br><br>
      <div class="movie">
      <imagem width="320" height="240" controls="controls">
            <a href="http://localhost/Filmes/View/filme3.php"><img src="PWRAS.jpg" type="jpg" 
            img alt="Power Ranger: Agora e Sempre"></a>
          </imagem>
        <h2>Power Ranger: Agora e Sempre</h2>
        <p>ma homenagem a uma geração de fãs da série, que é uma das sagas mais queridas da cultura pop. Power Rangers: Agora e Sempre 
            é o primeiro reencontro do elenco original da icônica série. Nesta nova aventura, uma jovem heroína assume seu lugar de direito
            entre os Power Rangers, que ficam cara a cara com uma ameaça familiar do passado. Em meio a uma crise global, eles são chamados
            mais uma vez para serem os heróis de que o mundo precisa. Quando Trini, o ranger amarelo é morto, os Mighty Morphing Power Rangers
            são chamados de volta ao jogo quase 30 anos depois da chegada de seus sucessores. Rita Repulsa consegue retornar como um robô superpoderoso
            em busca de vingança e os rangers devem se reunir uma última vez para derrotar seu antigo inimigo ou serão exterminados definitivamente.
            Mas ao se tornar um Ranger, você sempre fará parte da família..</p>
      </div>
    </div>
  </div>
</head>
<script>    
      $( function() {
        $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
      </script>
    <body>
    <div id="accordion">
      <h3>Indicar Filme</h3>
      <div>
        <form method="POST" action="../Controller/acoes.php?operacao=inserir_filme" 
        onsubmit="return validaCampo()" name="form1">
          <table width="600">
            <thead>
              <th>Nome do Filme</th>
              <th>Gênero</th>
              <th>Produtora</th>
            </thead>
            <tbody>
              <tr>
                <td><input type="text" id="filme_f" name="filme" maxlength="50" required/></td>
                <td><input type="text" id="genero_f" name="genero" maxlength="50" required/></td>
                <td><input type="text" id="produtora_f" name="produtora" maxlength="50" required/></td>
              </tr>
              <tr>
                <td><input type="submit" value="Indicar Filme" /></td>
                <td></td>
                <td><input type="reset" value="Limpar Dados" /></td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
      <h3>Remover Filme</h3>
      <div>
          <form method="post" action="../Controller/acoes.php?operacao=remover_filmes">
            Filme: <input type="text" name="nome" required/>
            <input type="submit" value="Remover Dados">
          </form>
      </div>
      <h3>Visualizar Filmes</h3>
      <div>
      <table width="600">
                <thead>
                  <tr>
                    <th>Nome do Filme</th>
                    <th>Ordem</th>
                    <th>Gênero</th>
                    <th>Produtora</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $f_controller->visualizar_dados();
                ?>
                </tbody>
              </table>
      </div>
    </div>
    </body>
    </html>
    <div class = "exit"><form action="../Controller/logout.php" method="post">
          <h1>
          <button ng-click="$root.logout()">Clique aqui para sair</button>
            </h1>
        </form>
    </div>