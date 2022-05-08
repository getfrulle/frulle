<?php
route('/', function () {
  template('home');
});

route('post/:num', function ($matches) {
  template('home', ['id' => $matches[0]]);
});
