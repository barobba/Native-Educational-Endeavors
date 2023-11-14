<?php 

  $page['title'] = 'Dr. John Henry Glover';
  
  require_once 'php/_init.php';
  $page['fb']['og']['og:image'] = $base_url.'/pictures/profiles/profile-arobba.jpg';

?>
<?php require_once 'template/page-top.php' ?>

  <style>

    img.profile-picture {
      width: 33%;
    }
    
  </style>

  <div>
  
    <img class="profile-picture" src="pictures/profiles/profile-arobba-2.png" />
  
    <p>
      Biagio Arobba
      <br />Software Engineer
    </p>
    
    <p>
      Native Educational Endeavors, Inc.
      <br />PO Box 646, 2520 Hamster Hill Place
      <br />Spearfish, South Dakota 57783-0646
    </p>
    
    <p>
      (402) 401-0458 (direct cell)
      <br />E-mail address: <a href="mailto:barobba@gmail.com">barobba@gmail.com</a>
      <br />Website: <a href="http://biagio.arobba.com">biagio.arobba.com</a>
    </p>
    
  </div>
  
  <div class="fb-like" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
  
  <div class="biography">
  </div>
  
  <div class="activities">
  
    <p>
      <img src="pictures/general/youth-development-computer-lab.jpg" />
      November 2011, Photo of Biagio Arobba (left) and Lezley Kempf (right) installing
      donated computers for the Youth Development Program at Lakota Homes,
      Rapid City, South Dakota. 
    </p>
    
  </div>
	
<?php require_once 'template/page-bottom.php' ?>
