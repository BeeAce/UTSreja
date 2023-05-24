<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = [
            [
                'id'           => 1,
                'name'         => 'Model S',
                'manufacturer' => 'Tesla',
                'type'         => 'Car',
                'fuel'         => 'Electric',
            ],
            [
                'id'           => 2,
                'name'         => 'F-150',
                'manufacturer' => 'Ford',
                'type'         => 'Car',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 3,
                'name'         => 'CBR600RR',
                'manufacturer' => 'Honda',
                'type'         => 'Motorcycle',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 4,
                'name'         => 'R1',
                'manufacturer' => 'Yamaha',
                'type'         => 'Motorcycle',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 5,
                'name'         => 'Vespa GTS 300',
                'manufacturer' => 'Vespa',
                'type'         => 'Motorcycle',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 6,
                'name'         => 'Ninja 400',
                'manufacturer' => 'Kawasaki',
                'type'         => 'Motorcycle',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 7,
                'name'         => 'Model 3',
                'manufacturer' => 'Tesla',
                'type'         => 'Car',
                'fuel'         => 'Electric',
            ],
            [
                'id'           => 8,
                'name'         => 'Civic',
                'manufacturer' => 'Honda',
                'type'         => 'Car',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 9,
                'name'         => 'Street Triple RS',
                'manufacturer' => 'Triumph',
                'type'         => 'Motorcycle',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 10,
                'name'         => 'Prius',
                'manufacturer' => 'Toyota',
                'type'         => 'Car',
                'fuel'         => 'Hybrid',
            ],
            [
                'id'           => 11,
                'name'         => 'YZF-R6',
                'manufacturer' => 'Yamaha',
                'type'         => 'Motorcycle',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 12,
                'name'         => 'Model X',
                'manufacturer' => 'Tesla',
                'type'         => 'Car',
                'fuel'         => 'Electric',
            ],
            [
                'id'           => 13,
                'name'         => 'Range Rover Sport',
                'manufacturer' => 'Land Rover',
                'type'         => 'Car',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 14,
                'name'         => 'Ducati Monster 821',
                'manufacturer' => 'Ducati',
                'type'         => 'Motorcycle',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 15,
                'name'         => 'Grom',
                'manufacturer' => 'Honda',
                'type'         => 'Motorcycle',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 16,
                'name'         => 'Chiron',
                'manufacturer' => 'Bugatti',
                'type'         => 'Car',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 17,
                'name'         => 'Panigale V4',
                'manufacturer' => 'Ducati',
                'type'         => 'Motorcycle',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 18,
                'name'         => 'Taycan',
                'manufacturer' => 'Porsche',
                'type'         => 'Car',
                'fuel'         => 'Electric',
            ],
            [
                'id'           => 19,
                'name'         => 'Softail Deluxe',
                'manufacturer' => 'Harley-Davidson',
                'type'         => 'Motorcycle',
                'fuel'         => 'Gasoline',
            ],
            [
                'id'           => 20,
                'name'         => 'Leaf',
                'manufacturer' => 'Nissan',
                'type'         => 'Car',
                'fuel'         => 'Electric',
            ],
        ];
        

        Vehicle::insert($vehicles);
    }
}
