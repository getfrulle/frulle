<?php
function template($template, $args = []) {
  $filepath = path::get('templates') . "/$template/template.php";

  if(function_exists('controller')) {
    $args['template'] = $template;
    $args = controller($args);
  }

  if(!file_exists($filepath)) return;

  extract($args);

  require_once $filepath;
  die;
}