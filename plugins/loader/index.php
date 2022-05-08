<?php
function loadPlugins(array $plugins = [])
{
  foreach ($plugins as $plugin) {
    $path = __DIR__ . '/../' . $plugin . '/index.php';

    if (!file_exists($path)) {
      die("Plugin $plugin missing!");
    }

    require_once $path;
  }
}
