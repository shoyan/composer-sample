<?php
require __DIR__ . '/vendor/autoload.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

echo getenv('USER_NAME');
echo "\n";
echo getenv('SECRET_KEY');
