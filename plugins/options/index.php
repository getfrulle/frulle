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
    //if(!isset($GLOBALS['frulle']))
    $GLOBALS['frulle'][$namespace][$key] = $value;
  }
}
