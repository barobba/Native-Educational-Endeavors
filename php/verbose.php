<?php

function v($data) {
  verbose($data);
}
function verbose($data) {
  echo '<pre>'.print_r($data, TRUE).'</pre>';
}
