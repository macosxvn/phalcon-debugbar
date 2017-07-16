## Phalcon Debugbar
Allow to add [PHP Debug Bar](https://github.com/maximebf/php-debugbar) to [Phalcon Framework](https://github.com/phalcon/cphalcon)
Project is in progressing
## Features
1. Support Phalcon 3.1.x, PHP 5.6 & 7.0
2. Auto inject PHP Debug Bar to template

## Installation
#### Composer (not ready)
#### Github
Clone the project from github repository: [phalcon-debugbar](https://github.com/macosxvn/phalcon-debugbar.git)
````bash
git clone https://github.com/macosxvn/phalcon-debugbar.git path/to/debugbar
````

Edit the composer.json and add the following definition
````json
"repositories": [
    {
        "type": "path",
        "url": "path/to/debugbar"
    }
],
````
````json
"require": {
    "macosxvn/phalcon-debugbar":"@dev"
}
````
Run the composer to install the dependencies required
````bash
composer install
````

Create the symlink for the assetment
````bash
composer run-script post-install-cmd -d vendor/macosxvn/phalcon-debugbar
````
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