test : composer.phar
	php composer.phar install
	php test.php

composer.phar :
	curl -s http://getcomposer.org/installer | php
