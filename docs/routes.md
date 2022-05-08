# Routes

```php
route('/', function () {
  template('home');
});

route('post/:num', function ($matches) {
  template('post', ['id' => $matches[0]]);
});
```
