<?php 

  $page['title'] = 'Website Development Services';
   
  require_once 'php/_init.php';
  $page['fb']['og']['og:image'] = $base_url.'/pictures/web-portfolio/nee.png';
  
?>
<?php require_once 'template/page-top.php' ?>

  <style>
    table.grid {padding-bottom: 1em;}
	  .thumb{display: block; width: 120px; height: 120px; border: 2px solid #343434;}
    a.thumb:hover {z-index: 1; display: block; border: 2px solid white;}
	  
  </style>
  
  <h2 id="page-title">Website Development</h2>
  
  <p>
    If your project needs a website, please feel free to contact <a href="profile-glover.php">Dr. John Glover</a>.
  </p>
  
  <p>Examples, taken from Biagio Arobba's portfolio (our software engineer):</p>
  
  <table class="grid">
    <tr class="grid">
      <td class="grid"><a class="thumb" target="_blank"
        href="http://itbcbuffalo.com" 
        style="
          background-image: url(pictures/web-portfolio/itbc.png);
          background-size: 200%;
        "></a>
      </td>
      <td class="grid"><a class="thumb" target="_blank"
        href="http://star-quilts.biagio.arobba.com" 
        style="
          background-image: url(pictures/web-portfolio/star-quilt-wiki.png);
          background-size: 175%;
        "></a>
      </td>
      <td class="grid"><a class="thumb" target="_blank"
        href="http://www.pineridgejobsbank.com/short-term/" 
        style="
          background-image: url(pictures/web-portfolio/pracc-short-term.png);
          background-size: 350%;
        "></a>
      </td>
      <td class="grid"><a class="thumb" target="_blank"
        href="http://www.lakotaprairie.com" 
        style="
          background-image: url(pictures/web-portfolio/lakota-prairie-ranch.png);
          background-size: 150%;
        "></a>
      </td>
    </tr>
    <tr class="grid">
      <td class="grid"><a class="thumb" target="_blank"
        href="http://liveandtell.com" 
        style="
          background-image: url(pictures/web-portfolio/liveandtell.png);
          background-size: 150%;
        "></a>
      </td>
      <td class="grid"><a class="thumb" target="_blank"
        href="http://tuswecatiospaye.com" 
        style="
          background-image: url(pictures/web-portfolio/tusweca-tiospaye.png);
          background-size: 350%;
        "></a>
      </td>
      <td class="grid"><a class="thumb" target="_blank"
        href="http://nativeed.com" 
        style="
          background-image: url(pictures/web-portfolio/nee.png);
          background-size: 150%;
        "></a>
      </td>
      <td class="grid"><a class="thumb" target="_blank"
        href="https://sites.google.com/site/barbsokolow/" 
        style="
          background-image: url(pictures/web-portfolio/artist-barb-sokolow.png);
          background-size: 225%;
        "></a>
      </td>
    </tr>
  </table>
  
  <div class="fb-like" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>

  <h3>Using Google Sites:</h3>  

  <ul>
    <li><a target="_blank" href="http://www.lakotaprairie.com">Lakota Prairie Ranch &amp; Resort</a></li>
    <li><a target="_blank" href="https://sites.google.com/site/barbsokolow/">Artist Barbara Sokolow</a>
    <li><a target="_blank" href="https://sites.google.com/site/lakotashadows/">Artist Todd "Lone Dog" Bordeaux</a>
  </ul>

  <h3>Using Drupal:</h3>
    
  <ul>
    <li><a target="_blank" href="http://itbcbuffalo.com">InterTribal Buffalo Council (Theme by Jaelle Shermann)</a></li>
    <li><a target="_blank" href="http://pineridgejobsbank.com/short-term/">Pine Ridge Jobs Bank - Short Term Labor</a></li>
    <li><a target="_blank" href="http://lakotamall.com">Lakota Mall</a></li>
    <li><a target="_blank" href="http://tuswecatiospaye.org">Tusweca Tiospaye</a></li>
    <li><a target="_blank" href="http://liveandtell.com">LiveAndTell</a></li>
  </ul>

  <h3>Handmade:</h3>

  <ul>
    <li><a target="_blank" href="http://star-quilts.biagio.arobba.com">Star Quilt Wiki</a></li>
    <li><a target="_blank" href="http://nativeed.com">Native Educational Endeavors</a></li>
  </ul>
  
<?php require_once 'template/page-bottom.php' ?>
