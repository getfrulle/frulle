<?php
class option
{
  public static function get($key = null, $namespace = 'options')
  {
    if ($key === null)
      return $GLOBALS['frulle'][$namespace];
    elseif (isset($GLOBALS['frulle'][$namespace][$key]))
      return $GLOBALS['frulle'][$namespace][$key];
  }

  public static function set($key, $value, $namespace = 'options')
  {
    $GLOBALS['frulle'][$namespace][$key] = $value;
  }
}

function option($key = null, $namespace = 'options')
{
  return option::get($key, $namespace);
}
