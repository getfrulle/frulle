<?php
class option {
  public static function get($key = null, $namespace = 'options') {
    if($key === null)
      return $GLOBALS[$namespace];
    elseif(isset($GLOBALS[$namespace][$key]))
      return $GLOBALS[$namespace][$key];
  }

  public static function set($key, $value, $namespace = 'options') {
    $GLOBALS[$namespace][$key] = $value;
  }
}