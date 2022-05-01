<?php
url::set('root', '//' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
path::set('root', __DIR__ . '/../');
#path::set('components', path('components'));
path::set('templates', __DIR__ . '/templates');
path::set('snippets', path('site/snippets'));

#echo path::get('templates') . "\n";