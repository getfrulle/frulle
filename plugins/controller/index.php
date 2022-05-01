<?php
function controller($args = []) {
  $filepath = path::get('templates') . '/' . $args['template'] . '/controller.php';

  if(!file_exists($filepath)) return;

  $controller = include $filepath;
  $args = $controller($args);

  return $args;
}