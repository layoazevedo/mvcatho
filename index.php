<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require "vendor/autoload.php";

$application = new MvCatho\System\CathoCore();
$application->run();