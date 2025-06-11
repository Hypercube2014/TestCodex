<?php
namespace App\Controller;

use App\Service\VehicleService;

class VehicleController
{
    private VehicleService $service;

    public function __construct()
    {
        $this->service = new VehicleService();
    }

    public function home(): string
    {
        $vehicles = $this->service->listVehicles();
        ob_start();
        include __DIR__ . '/../View/home.php';
        return ob_get_clean();
    }
}
