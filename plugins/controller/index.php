<?php
function controller(array $args = [], string $_template)
{
  $_controllerpath = path::get('templates') . '/' . $_template . '/controller.php';
  $controller = include $_controllerpath;
  $args = $controller($args);

  return $args;
}
