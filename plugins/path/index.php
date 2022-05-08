<?php
function path($uri = '')
{
  $root = rtrim(option::get('root', 'path'), '/');
  return "$root/$uri";
}

class path
{
  public static function get(string $uri = '')
  {
    return option::get($uri, 'path');
  }

  public static function set(string $key, $value)
  {
    return option::set($key, $value, 'path');
  }
}
