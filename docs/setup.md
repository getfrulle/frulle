# Setup

<!--
$rest = substr("abcdef", 0, -1);  // returns "abcde"
$rest = substr("abcdef", 2, -1);  // returns "cde"
$rest = substr("abcdef", 4, -4);  // returns ""; prior to PHP 8.0.0, false was returned
$rest = substr("abcdef", -3, -1); // returns "de"
-->

## Index

```php
require_once __DIR__ . '/plugins/loader/index.php';

loadPlugins(['controller', 'options', 'path', 'router', 'snippet', 'template', 'url']);

require_once __DIR__ . '/site/settings.php';
require_once path::get('routes');
```

1. The plugin "Loader" is loaded. It's a simpler way to use `glob()` to load plugins.
1. The plugins that we need are loaded. The plugins are called by their folder names.
1. The settings are loaded. Urls and paths are set.
1. The routes are loaded by the path set in settings.

## Settings

```php
// Urls
url::set('root', '//' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);

// Paths
path::set('root', __DIR__ . '/../');
path::set('templates', path('site/templates'));
path::set('snippets', path('site/snippets'));
path::set('routes', path('site/routes.php'));
```

You can use this file for whatever you like. By default a root url and some paths are set.

Be aware that these settings may be used by plugins.

## `url` and `path`

Both `url` and `path` classes uses `$GLOBALS` to store their data. It's stored in `['frulle']['url']['my_url']` or `['frulle']['url']['my_url']`

## url

### url::set()

You can set an url like this:

```php
url::set('root', 'https://example.com');
url::set('another', 'https://example.com/post', 'my_namespace');
```

Urls are stored in the global variable:

```php
$GLOBALS['frulle']['url']['my_url'];
```

### url::get()

There are a few urls set to the global space by default. You can call them by name like below.

```php
echo url::get('root');
```

### url()

## Paths

### path::set()

You can set a path like this:

```php
path::set('root', __DIR__ . '/');
path::set('another', __DIR__ . '/my-other-path', 'my_namespace');
```

Paths are stored in the global variable:

```php
$GLOBALS['frulle']['path']['my_path'];
```

### path::get()

There are a few paths set to the global space by default. You can call them by name like below.

```php
echo path::get('templates');
```

### path()

The code below will output the rootpath combined with `folder/file.php`.

```php
echo path('folder/file.php');
```
