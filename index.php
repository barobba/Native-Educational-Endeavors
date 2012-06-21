<?php $page['title'] = 'Home' ?>
<?php require_once 'php-code/template-top.php' ?>

  <style>
    .content {
      position: relative;
    }
    #splash {
      position: absolute;
      top: 0px;
      left: 0px;
      z-index: 1;
    }
    #splash-message {
      position: absolute;
      top: 0px;
      left: 0px;
      width: 100%;
      z-index: 2;
      text-align: center;
      font-size: 40px;
      font-style: italic;
    }
  </style>

	<img id="splash" src="pictures/splash/_splash.png" />
	<div id="splash-message">
	  Providing educational
	  <br />opportunities for
	  <br />American Indians and
	  <br />fostering cross-cultural
	  <br />respect
	</div>

<?php require_once 'php-code/template-bottom.php' ?>
