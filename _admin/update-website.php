<?php

$messages = '';

// Click here to update the website
if (array_key_exists('github-pull', $_REQUEST)) {
  $messages .= "Operation not yet implemented\n";
}


?>

<style>
  body {text-align: center;}
  #page-wrapper {width: 900px; margin: 0px auto; text-align: left;}
  #messages {background-color: #dddddd; padding: 2em;}
</style>

<div id="page-wrapper">

  <h1>NEE Website Admin</h1>
  
  <h2>Options:</h2>
  
  <form action="update-website.php">
    <div class="field">
      <div class="label">Pull repository:</div>
      <input class="widget" type="Submit" name="github-pull" value="Pull repository" />
      <div class="description">Pull the content from the shared GIT Hub repository.</div>
    </div>
  </form>
  
  <?php if (!empty($messages)): ?>
    <h2>Report:</h2>
    <div id="messages"><?php echo $messages ?></div>
  <?php endif; ?>

</div>
