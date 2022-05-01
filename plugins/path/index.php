<?php
function path($uri = '') {
  $root = rtrim(option::get('root', 'path'), '/');
  return "$root/$uri";
  #return path::get($uri);
}

class path {
  public static function get($key) {
    return option::get($key, 'path');
  }

  public static function set($key, $value) {
    return option::set($key, $value, 'path');
  }
}