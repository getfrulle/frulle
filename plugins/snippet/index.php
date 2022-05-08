<?php
function snippet(string $snippet, array $args = [])
{
  $_snippetpath = path::get('snippets') . "/$snippet.php";

  if (!file_exists($_snippetpath)) return;

  $args = array_merge(option::get('args', 'template'), $args);

  extract($args);

  include $_snippetpath;
  echo "\n";
}
