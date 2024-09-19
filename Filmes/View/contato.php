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
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  <div class="menu">
    <body>
    <nav class="menu-horizontal">
    <ul>
	  	<li><a href="./Principal.php">Home</a></li>
		    <li><a href="./sobre.php">Sobre</a></li>
		<li><a href=".?contato.php">Contato</a></li>
</ul>
</nav>
</div>
  <style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; }
  #resizable h3 { text-align: center; margin: 0; }
  .ui-resizable-helper { border: 1px dotted gray; }
  </style>
  <script>
  $( function() {
    $( "#resizable" ).resizable({
      animate: true
    });
  } );
  </script>
</head>
<body>
 
<div id="resizable" class="ui-widget-content">
  <h3 class="ui-widget-header">Contatos: 
    E-mail: tassiolopes@outlook.com <br>
    Telefone: 84 9 9933-1886<br>
    Responsável: Baianinho MultiShow.<br>
  </h3>
</div>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>

<style>
  #gallery { float: left; width: 65%; min-height: 12em; }
  .gallery.custom-state-active { background: #eee; }
  .gallery li { float: left; width: 96px; padding: 0.4em; margin: 0 0.4em 0.4em 0; text-align: center; }
  .gallery li h5 { margin: 0 0 0.4em; cursor: move; }
  .gallery li a { float: right; }
  .gallery li a.ui-icon-zoomin { float: left; }
  .gallery li img { width: 100%; cursor: move; }
 
  #trash { float: right; width: 32%; min-height: 18em; padding: 1%; }
  #trash h4 { line-height: 16px; margin: 0 0 0.4em; }
  #trash h4 .ui-icon { float: left; }
  #trash .gallery h5 { display: none; }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {

    var $gallery = $( "#gallery" ),
      $trash = $( "#trash" );
 

    $( "li", $gallery ).draggable({
      cancel: "a.ui-icon", 
      revert: "invalid", 
      containment: "document",
      helper: "clone",
      cursor: "move"
    });
 

    $trash.droppable({
      accept: "#gallery > li",
      classes: {
        "ui-droppable-active": "ui-state-highlight"
      },
      drop: function( event, ui ) {
        deleteImage( ui.draggable );
      }
    });
 

    $gallery.droppable({
      accept: "#trash li",
      classes: {
        "ui-droppable-active": "custom-state-active"
      },
      drop: function( event, ui ) {
        recycleImage( ui.draggable );
      }
    });
 

    var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
    function deleteImage( $item ) {
      $item.fadeOut(function() {
        var $list = $( "ul", $trash ).length ?
          $( "ul", $trash ) :
          $( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $trash );
 
        $item.find( "a.ui-icon-trash" ).remove();
        $item.append( recycle_icon ).appendTo( $list ).fadeIn(function() {
          $item
            .animate({ width: "48px" })
            .find( "img" )
              .animate({ height: "36px" });
        });
      });
    }
 
    var trash_icon = "<a href='link/to/trash/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-trash'>Delete image</a>";
    function recycleImage( $item ) {
      $item.fadeOut(function() {
        $item
          .find( "a.ui-icon-refresh" )
            .remove()
          .end()
          .css( "width", "96px")
          .append( trash_icon )
          .find( "img" )
            .css( "height", "72px" )
          .end()
          .appendTo( $gallery )
          .fadeIn();
      });
    }
 

    function viewLargerImage( $link ) {
      var src = $link.attr( "href" ),
        title = $link.siblings( "img" ).attr( "alt" ),
        $modal = $( "img[src$='" + src + "']" );
 
      if ( $modal.length ) {
        $modal.dialog( "open" );
      } else {
        var img = $( "<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />" )
          .attr( "src", src ).appendTo( "body" );
        setTimeout(function() {
          img.dialog({
            title: title,
            width: 400,
            modal: true
          });
        }, 1 );
      }
    }

    $( "ul.gallery > li" ).on( "click", function( event ) {
      var $item = $( this ),
        $target = $( event.target );
 
      if ( $target.is( "a.ui-icon-trash" ) ) {
        deleteImage( $item );
      } else if ( $target.is( "a.ui-icon-zoomin" ) ) {
        viewLargerImage( $target );
      } else if ( $target.is( "a.ui-icon-refresh" ) ) {
        recycleImage( $item );
      }
 
      return false;
    });
  } );
  </script>
</head>
<body>
 
<div class="ui-widget ui-helper-clearfix">
 <h4>Arraste para a caixa os filmes assistidos</h4>
<ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">Power Ranger</h5>
    <img src="PWRAS.jpg" alt="The peaks of High Tatras" width="96" height="72">
    <a href="PWRAS.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
    <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Remover da lista</a>
  </li>
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">Deus não está morto:ULNE</h5>
    <img src="DNEMULNE.jpg" alt="The chalet at the Green mountain lake" width="96" height="72">
    <a href="DNEMULNE.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
    <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Remover da lista</a>
  </li>
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">Deus não está morto 2</h5>
    <img src="DNEM2.jpg" alt="Planning the ascent" width="96" height="72">
    <a href="DNEM2.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
    <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Remover da lista</a>
  </li>
  <li class="ui-widget-content ui-corner-tr">
    <h5 class="ui-widget-header">paulinho o loko</h5>
    <img src="paulinho.jpg" alt="On top of Kozi kopka" width="96" height="72">
    <a href="paulinho.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
    <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Remover da lista</a>
  </li>
</ul>
 
<div id="trash" class="ui-widget-content ui-state-default">
  <h4 class="ui-widget-header"><span class="ui-icon ui-icon-trash">Assistidos</span> Assistidos</h4>
</div>
 
</div>
 
 
</body>
</html>