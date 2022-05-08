# Templates

### Examples

To best illustrate how templates are used we have them inside routes.

```php
route('/', function () {
  template('home');
});

route('post/:num', function ($matches) {
  template('post', ['id' => $matches[0]]);
});
```
