<?php
require_once __DIR__ . '/plugins/loader/index.php';

loadPlugins(['options', 'url', 'path', 'router', 'template', 'controller', 'snippet']);

require_once __DIR__ . '/tests/settings.php';
require_once path::get('routes');
