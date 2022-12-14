## usage

```
$ composer require green-spot/pachira-twig
$ cp -r vendor/green-spot/pachira-twig/samples/. ./
```

```php
<?php

get("/", function(){
  twig("template.html", ["key" => "val"]);
});
```
