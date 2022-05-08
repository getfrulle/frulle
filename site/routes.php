<?php
route('/', function () {
  template('home');
});

route('post/:num', function ($matches) {
  template('post', ['id' => $matches[0]]);
});

route(':all', function ($matches) {
  header("HTTP/1.0 404 Not Found");
  template('error', ['uri' => implode('/', $matches)]);
});
