<?php
namespace App\Service;

use App\Model\Vehicle;

class VehicleService
{
    /**
     * @return Vehicle[]
     */
    public function listVehicles(): array
    {
        // Placeholder data
        $v = new Vehicle();
        $v->id = 1;
        $v->name = 'Model S';
        $v->brand = 'Tesla';
        $v->dailyPrice = 99.99;

        return [$v];
    }
}
