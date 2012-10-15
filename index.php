<?php

  $base_path = explode('/', $_SERVER['SCRIPT_NAME']);
  array_pop($base_path);
  array_shift($base_path);
  $base_path = implode('/', $base_path);
  
  $base_url = $_SERVER['HTTP_HOST'].'/'.$base_path;
  
  $page['title'] = 'Home';
  $page['og_image'] = 'http://'.$base_url.'/pictures/splash/_splash.png';
  
?>
<?php require_once 'template/page-top.php' ?>

  <style>
    .content {position: relative; background-image: url(pictures/splash/_splash.png); background-repeat: no-repeat;}
    #splash {position: absolute; top: 0px; left: 0px; z-index: 1; }
    #splash-message {position: absolute; top: 60px; left: 0px; width: 100%; z-index: 2; text-align: center; font-size: 47px; font-style: italic; line-height: 1.12em;}
    .fb-like {position: absolute; top: 363px;}
    #mortar-board {position: absolute; top: 400px;}
  </style>

	<div id="splash-message">
	  Providing educational
	  <br />opportunities for
	  <br />American Indians and
	  <br />fostering cross-cultural
	  <br />respect
	</div>
	
	<div class="fb-like" data-send="false" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>	
	
	<img id="mortar-board" src="pictures/mortar-board-with-feather.png" />

<?php require_once 'template/page-bottom.php' ?>
