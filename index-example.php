<?php
require_once __DIR__ . '/plugins/loader/index.php';

loadPlugins(['controller', 'options', 'path', 'router', 'snippet', 'template', 'url']);

require_once __DIR__ . '/site/settings.php';
require_once path::get('routes');
