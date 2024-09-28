<?php

require_once '../vendor/autoload.php';
require_once '../src/Routes/api.php';

use GMath\Core\Core;
use GMath\Http\Route;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

Core::dispatch(Route::getRoutes());
?>