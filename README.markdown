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


Sample invocation
-----------------

```
$ make test
curl -s http://getcomposer.org/installer | php
#!/usr/bin/env php
All settings correct for using Composer

Composer successfully installed to: /private/tmp/t/gelf-php-test/composer.phar
Use it: php composer.phar
php composer.phar install
Installing from lock file                                                       
  - Package graylog2/gelf-php (dev-add-composer-support)
    Cloning 3000caece79336bbaca1945bba26ab47ecc2a4b9

Generating autoload files
php test.php
$publisher = GELFMessagePublisher Object
(
    [hostname:protected] => 172.16.22.30
    [port:protected] => 12201
    [chunkSize:protected] => 1420
)

$message = GELFMessage Object
(
    [version:GELFMessage:private] => 1.0
    [timestamp:GELFMessage:private] => 
    [shortMessage:GELFMessage:private] => something is broken.
    [fullMessage:GELFMessage:private] => lol full message!
    [facility:GELFMessage:private] => 
    [host:GELFMessage:private] => somehost
    [level:GELFMessage:private] => 2
    [file:GELFMessage:private] => /var/www/example.php
    [line:GELFMessage:private] => 1337
    [data:GELFMessage:private] => Array
        (
            [_something] => foo
            [_something_else] => bar
        )

)
```

Notes
-----

[2012-04-05] My `composer.json` is pointing to my fork of gelf-php at [http://github.com/msabramo/gelf-php]
(http://github.com/msabramo/gelf-php).

If [my pull request](https://github.com/Graylog2/gelf-php/pull/9) is accepted into [the official gelf-php]
(https://github.com/Graylog2/gelf-php), then this can be changed to
[https://github.com/Graylog2/gelf-php](https://github.com/Graylog2/gelf-php)