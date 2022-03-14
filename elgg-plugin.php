<?php

$autoload_path = __DIR__ . '/vendor/autoload.php';
require_once($autoload_path);


use Dotenv\Dotenv;


$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$appEnv = $_ENV['APP_ENV'];

if($appEnv == "dev"){

	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
}
    

return [];
        