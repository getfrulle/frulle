<?php
function template(string $_template, array $args = [])
{
  $_controllerpath = path::get('templates') . "/$_template/controller.php";

  if (function_exists('controller') && file_exists($_controllerpath)) {
    $args = controller($args, $_template);
  }

  $_templatepath = path::get('templates') . "/$_template/template.php";

  if (!file_exists($_templatepath)) return;

  option::set('name', $_template, 'template');
  option::set('args', $args, 'template');

  if (is_array($args)) {
    extract($args);
  }

  require_once $_templatepath;
  die;
}
