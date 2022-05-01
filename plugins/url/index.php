<?php
function url($uri = '') {
  return url::get($uri);
}

class url {
  public static function get($uri = '') {
    $root = rtrim(option::get('root', 'url'), '/');
    return "$root/$uri";
  }

  public static function set($key, $value) {
    return option::set($key, $value, 'url');
  }
}