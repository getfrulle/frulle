<?php
require_once __DIR__ . '/plugins/loader/index.php';

loadPlugins(['options', 'url', 'path', 'router', 'template', 'controller', 'snippet']);

require_once __DIR__ . '/site/settings.php';
require_once __DIR__ . '/site/routes.php';
