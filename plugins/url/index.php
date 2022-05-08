<?php
function url($uri = '')
{
  $root = rtrim(option::get('root', 'url'), '/');
  return "$root/$uri";
}

class url
{
  public static function get(string $uri = '')
  {
    return option::get($uri, 'url');
  }

  public static function set(string $key, $value)
  {
    return option::set($key, $value, 'url');
  }
}
