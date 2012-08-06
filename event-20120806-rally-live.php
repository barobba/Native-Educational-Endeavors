<?php $page['title'] = 'Hospitality Lodge &amp; Awareness Week (August 2012)' ?>
<?php require_once 'template/page-top.php' ?>
<script type="Application/javascript" src="event-20120806-rally-live.js"></script>
<script type="Application/javascript" src="event-20120806-rally-thanks.js"></script>
<link rel="stylesheet" type="text/css" href="event-20120806-rally.css" />

<style>
  #ustream{margin: 0px auto; text-align: center;}
  .special-thanks {text-align: center;}
</style>


<h2 id="page-title">Hospitality Lodge &amp; Awareness Week</h2>
<h3 class="subheading">Spearfish, SD - During Rally Week, August 2012</h3>

<!-- Live video feed -->
<div id="ustream">
  <iframe width="480" height="296" src="http://www.ustream.tv/embed/11642647" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe>
  <br /><a href="http://www.ustream.tv/" style="padding: 2px 0px 4px; display: block; font-weight: normal; font-size: 10px; text-decoration: underline; text-align: center;" target="_blank">Video streaming by Ustream</a>
</div>


<!-- Facebook photo album -->
<h3 class="subheading">Caught Being Charitable</h3>
<p>Get your photo here by providing a charitable donation 
   to Native Educational Endeavors or Northern Hills Court Appointed Special Advocates, during Sturgis Bike Rally Week at the Hospitality Lodge Event.</p>
<div id="fb-charitable-gallery" class="centered">
  <!-- Facebook photo album goes here -->
  <script type="text/template-x" id="fb-charitable-template">
    <div id="picture-box">
      <div id="picture-section">
        <a id="fb-link"><img ID="picture" /></a>
      </div>
      <div id="caption-section">
        <a id="fb-link">FACEBOOK PHOTO: </a><a id="fb-link" class="caption">CAPTION</a>
      </div>
    </div>
  </script>
</div>

<p id="info-link" class="centered" ><a class="button" href="event-20120806-rally.php">Click here for more information about the event</a></p>

<p class="centered"><a class="button" target="_blank" href="http://www.giveblackhills.org/27627">Please Support Us: Click Here To Donate</a></p>

<div class="special-thanks">
  Special thanks to:
  <div class="special-thanks-list"></div>
</div>

<div id="sponsorship-message">
  <p>Sponsored by:</>
  <div id="sponsors">
    <img src="pictures/logo-small.png" />
    <img src="pictures/nhcasa-logo-small.png" />
  </div>
</div>

<?php require_once 'template/page-bottom-wide.php' ?>
