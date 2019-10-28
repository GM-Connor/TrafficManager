<?php 
  // ( LinkText, LinkUrl, LinkName )
  $nav_links[] = array( '概要', 'index.php', 'index' );
  $nav_links[] = array( 'ＵＲＬ 詰め', 'url-shortener.php', 'url-shortener' );
  $nav_links[] = array( 'アカウント', 'accounts.php', 'accounts' );

 ?>

<div class="col-sm-3 col-md-2 sidebar">
	<nav class="navbar navbar-inverse nav-sidebar">
  <div class="container-fluid">
    <div class="navbar-header">
      <span class="navbar-brand" href="#">ネット<strong>測定</strong></span>
    </div>
  </div>
</nav>
  <ul class="nav nav-sidebar">
    <?php 

    for ( $i = 0; $i < sizeof($nav_links); $i++ ) {
      echo sprintf( '<li%s><a href="%s">%s%s</a></li>',
                    $PAGE == $nav_links[$i][2] ? ' class="active"' : '',
                    $nav_links[$i][1],
                    $nav_links[$i][0],
                    $PAGE == $nav_links[$i][2] ? ' <span class="sr-only">(current)</span>' : '' );
    }
     ?>
  </ul>
</div>