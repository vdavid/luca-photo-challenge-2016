<?php

use Philo\Blade\Blade;

const DEBUG_MODE = false;

error_reporting(E_ALL);
ini_set('display_errors', DEBUG_MODE);

setlocale(LC_TIME, 'hu_HU');
date_default_timezone_set('Europe/Budapest');
mb_internal_encoding('UTF-8');

require 'vendor/autoload.php';

$viewsFolderPath = __DIR__ . '/views';
$cacheFolderPath = __DIR__ . '/cache';

$blade = new Blade($viewsFolderPath, $cacheFolderPath);

/** @noinspection PhpUndefinedMethodInspection */
echo $blade->view()->make('layouts/master', ['debugMode' => DEBUG_MODE])->render();
