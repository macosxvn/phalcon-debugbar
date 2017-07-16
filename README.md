## Phalcon Debugbar
Allow to add [PHP Debug Bar](https://github.com/maximebf/php-debugbar) to [Phalcon Framework](https://github.com/phalcon/cphalcon)
Project is in progressing
## Features
1. Support Phalcon 3.1.x, PHP 5.6 & 7.0
2. Auto inject PHP Debug Bar to template

## Installation
#### Composer (not ready)
#### Github
## Quick start
Edit file index.php, add the following code just before your application send the response to browser
````php
$application = new \Phalcon\Mvc\Application($di);
....
// Create debugbar as service
$di->set('app', $application);
$di->set(\Macosxvn\Debugbar\Debugbar::SERVICE_NAME, new \Macosxvn\Debugbar\Debugbar($di));
echo $application->handle()->getContent();
````