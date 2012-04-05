gelf-php-test
=============

This is a test illustrating installing and using
[Graylog2](http://graylog2.org/)'s [gelf-php
library](https://github.com/Graylog2/gelf-php) using
[Composer](http://getcomposer.org/).

Just do:

```
make test
```

and it will:

* download `composer.phar` into the current directory

* invoke `php composer.phar install` which will pull down gelf-php from
  [my fork of gelf-php on GitHub](https://github.com/msabramo/gelf-php)

* invoke `php test.php` to illustrate thtat gelf-php is loaded properly

