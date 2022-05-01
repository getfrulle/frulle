<?php
function snippet($snippet, $args) {
  echo 'asd';
  $filepath = path::get('snippets') . "/$snippet.php";

  if(!file_exists($filepath)) return;

  extract($args);
  
  require_once $filepath;
}
/*
<?php

  if(!file_exists($filepath)) return;

  extract($args);

  require_once $filepath;
  die;
}
*/
