<?php 

  require_once 'php/_init.php';

  $page_url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $page_title = (isset($page['title']) ? $page['title'] : '').'| Native Educational Endeavors';
  
  $sys['page']['fb']['og']['fb:app_id'] = '219706154819433';
  $sys['page']['fb']['og']['fb:admins'] = '828465192';
  $sys['page']['fb']['og']['og:type'] = 'website';
  $sys['page']['fb']['og']['og:url'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].(!empty($_SERVER['QUERY_STRING'])? '?'.$_SERVER['QUERY_STRING'] : '');
  $sys['page']['fb']['og']['og:title'] = $page_title;
  
  if (isset($page['fb']['og'])) {
    $page['fb']['og'] = array_merge($sys['page']['fb']['og'], $page['fb']['og']);
  }
  else {
    $page['fb']['og'] = $sys['page']['fb']['og'];
  }
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml"
  xmlns:og="http://ogp.me/ns#"
  xmlns:fb="http://www.facebook.com/2008/fbml"
>
	<head>
	
	  <?php if (isset($page['fb']['og'])): ?>
	    <?php foreach ($page['fb']['og'] as $og_property => $og_content): ?>
      	<meta property="<?php echo $og_property ?>" content="<?php echo $og_content ?>"/> 
      <?php endforeach; ?>
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
    <link rel="stylesheet" type="text/css" href="stylesheets/wraptocenter.css" />
    <!--[if lt IE 8]>
    	<style>
    		.wraptocenter span {
    		    display: inline-block;
    		    height: 100%;
    		}
    	</style>
    <![endif]-->
    
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.ba-resize.min.js"></script>
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
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=219706154819433";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
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

          <div class="navigation">
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
          