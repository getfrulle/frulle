<?php
require_once __DIR__ . '/plugins/loader/index.php';

loadPlugins(['options', 'url', 'path', 'router', 'template', 'controller']);

require_once __DIR__ . '/site/options.php';
require_once __DIR__ . '/site/routes.php';