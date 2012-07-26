<?php 

  $page_url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $page_title = isset($page['title']) ? $page['title'] . ' | ' : '';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	
	  <?php if (array_key_exists('og_image', $page)): ?>
      <meta property="og:image" content="<?php echo $page['og_image'] ?>"/> 
	  <?php endif; ?>
	
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title><?php echo $page_title ?>Native Educational Endeavors, Inc.</title>
		<link rel="stylesheet" type="text/css" href="javascript/jquery.ui/css/sunny/jquery-ui-1.8.21.custom.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/page.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/border.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/layout-table.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/site-navigation.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/content.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/clearfix.css" />
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.ui/js/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript" src="javascript/layout.js"></script>
    <script type="text/javascript" src="javascript/content.js"></script>
    
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-32826120-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>    
    
	
	</head>
	<body>
    <div id="fb-root"></div>
	  <table class="layout"><tr>
		  <td class="layout-top-left">

        <div id="site-logo-container">
        	<img id="site-logo" src="pictures/logo.png" />
        </div>
		  
	    </td>
	    <td class="layout-top-right" colspan="2">

        <div class="border-top"><div class="border-bottom"><div class="border-top-left"><div class="border-top-right"><div class="border-bottom-left"><div class="border-bottom-right"><div class="border-left"><div class="border-right"><div class="border-center">

          <h1 id="site-title">
            <span class="first">N</span>ative <span class="first">E</span>ducational
            <br /><span class="first">E</span>ndeavors, <span class="first">INC</span>.
          </h1>        
          
        </div></div></div></div></div></div></div></div></div>
	    
	    </td></tr><tr>
	    <td class="layout-bottom-left">
	    
		    <div class="border-top"><div class="border-bottom"><div class="border-top-left"><div class="border-top-right"><div class="border-bottom-left"><div class="border-bottom-right"><div class="border-left"><div class="border-right"><div class="border-center">

          <div class="navigation" style="height: 843px">
            <div class="cushion-top"></div>
		        <?php require_once '_navigation.php' ?>
            <div class="cushion-bottom"></div>
          </div>
		      
		    </div></div></div></div></div></div></div></div></div>
	    
	    </td>
	    <td class="layout-bottom-center">

        <div class="border-top"><div class="border-bottom"><div class="border-top-left"><div class="border-top-right"><div class="border-bottom-left"><div class="border-bottom-right"><div class="border-left"><div class="border-right"><div class="border-center">
        
          <div class="content">
          
            <div class="cushion-top"></div>
          