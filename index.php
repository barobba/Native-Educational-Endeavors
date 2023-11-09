<?php

  $page['title'] = 'Providing educational opportunities for American Indians and fostering cross-cultural respect';
  
  require_once 'php/_init.php';
  $page['fb']['og']['og:image'] = $base_url.'/pictures/splash/NEE-Graphic.png';
  
?>
<?php require_once 'template/page-top.php' ?>

  <style>
    .content {position: relative; background-image: url(pictures/splash/NEE-Graphic.png); background-repeat: no-repeat;}
    #splash {position: absolute; top: 0px; left: 0px; z-index: 1; }
    .fb-like {position: absolute; top:150px;}
    #mortar-board {position: absolute; top: 400px;}
  </style>

	
	<div class="fb-like" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>	
	

<?php require_once 'template/page-bottom.php' ?>
