<?php

  $page['title'] = 'Providing educational opportunities for American Indians and fostering cross-cultural respect';
  
  require_once 'php/_init.php';
  $page['fb']['og']['og:image'] = $base_url.'/pictures/splash/NEE-Graphic.png';
  
?>
<?php require_once 'template/page-top.php' ?>

  <style>
    .splash {
      width: 504px;
      margin: 0 auto;
    }
    .fb-like {
      margin-top: 2rem; 
      margin-bottom: 1rem;
    }
  </style>
	
  <div class="splash">
  
    <img src="pictures/splash/NEE-Graphic.png" />
  	<div class="fb-like" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>	

  </div>

<?php require_once 'template/page-bottom.php' ?>
