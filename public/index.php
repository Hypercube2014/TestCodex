<?php
require __DIR__ . '/../vendor/autoload.php';
$config = require __DIR__ . '/../config/config.php';

use App\Controller\VehicleController;

$controller = new VehicleController();

echo $controller->home();
