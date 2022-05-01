<?php
class TinyRouter {
  private $pattern;
  private $callback;
  private $method;
  private $presets = [
    ':all' => '.*',
    ':alpha' => '[a-zA-Z]+',
    ':any' => '[^/]+',
    ':num' => '[0-9]+',
  ];

  public function __construct($pattern, $callback, $method = 'GET') {
    $this->pattern = $pattern;
    $this->callback = $callback;
    $this->method = $method;

    if($_SERVER['REQUEST_METHOD'] !== strtoupper($method)) return;

    $this->patternToExpression();
    $this->prependSlashIfMissing();
    $this->encapsulateExpression();

    $this->trimFolder();
    $this->render();
  }

  private function patternToExpression() {
    foreach($this->presets as $preset => $expression) {
      $this->pattern = strtr($this->pattern, [$preset => '(' . $expression . ')']);
    }
  }

  private function prependSlashIfMissing() {
    if($this->pattern !== ltrim($this->pattern, '/')) return;
    $this->pattern = "/$this->pattern";
  }

  private function encapsulateExpression() {
    $this->pattern = '~^' . $this->pattern . '$~';
  }

  private function trimFolder() {
    $folder = dirname($_SERVER['SCRIPT_NAME']);
    $uri = $_SERVER['REQUEST_URI'];

    $this->match = strtr($uri, [$folder => '']);
  }

  private function render() {
    $success = preg_match($this->pattern, $this->match, $matches);

    if(!$success) return;

    array_shift($matches);
    ($this->callback)($matches);
  }
}

class route {
  public static function __callStatic($method, $args) {
    $pattern = $args[0];
    $callback = $args[1];

    if(!in_array($method, ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'])) return;

    new TinyRouter($pattern, $callback, $method);
  }
}

function route($pattern, $callback) {
  new TinyRouter($pattern, $callback);
}