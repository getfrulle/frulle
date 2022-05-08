<?php
// Urls
url::set('root', '//' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);

// Paths
path::set('root', __DIR__ . '/../');
path::set('templates', path('site/templates'));
path::set('snippets', path('site/snippets'));
path::set('routes', path('site/routes.php'));
