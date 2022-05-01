<?php
route('/', function($matches) {
  template('home');
});

route('form/:any', function($matches) {
  print_R($matches);
  echo 'form/:any';
});