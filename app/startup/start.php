<?php

use cogear\config\Config;
use cogear\config\phalcon\PhalconConfig;
use common\Application;
use common\DI;

Config::init(new PhalconConfig(['app' => require dirname(__FILE__) . '/../config/app.php'], '.'));
DI::init(new Phalcon\DI\FactoryDefault());

Application::initConfig(Config::get('app'));
$app = Application::getInstance();

return $app;