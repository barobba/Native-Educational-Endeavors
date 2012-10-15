<?php

require_once 'verbose.php';

$base_path = base_path();
$base_url = base_url();

function base_path() {
  $base_path = explode('/', $_SERVER['SCRIPT_NAME']);
  array_pop($base_path);
  array_shift($base_path);
  $base_path = implode('/', $base_path);
  return $base_path;
}

function base_url () {
  
  $base_url = 'http://'.$_SERVER['HTTP_HOST'];
  
  $base_path = base_path();
  if (!empty($base_path)) {
    $base_url .= '/'.$base_path;
  }
  else {
    // Skipping, path is empty
  }
  
  return $base_url;
  
}
