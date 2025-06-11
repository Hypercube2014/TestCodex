<?php
namespace App\Model;

class Vehicle
{
    public int $id;
    public string $name;
    public string $brand;
    public float $dailyPrice;
    public bool $available = true;
}
