<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            // IT Equipment
            [
                'id' => 1,
                'name' => 'Computer',
                'category_id' => 1,
                'description' => 'Computers and related equipment',
            ],
            [
                'id' => 2,
                'name' => 'Printer',
                'category_id' => 1,
                'description' => 'Printers and printing devices',
            ],
            [
                'id' => 3,
                'name' => 'Networking',
                'category_id' => 1,
                'description' => 'Networking devices and equipment',
            ],
            [
                'id' => 13,
                'name' => 'Server',
                'category_id' => 1,
                'description' => 'Servers and data center equipment',
            ],

            // Furniture and Fixtures
            [
                'id' => 4,
                'name' => 'Furniture',
                'category_id' => 2,
                'description' => 'Office furniture and fixtures',
            ],
            [
                'id' => 14,
                'name' => 'Desk',
                'category_id' => 2,
                'description' => 'Office desks and workstations',
            ],

            // Vehicles
            [
                'id' => 5,
                'name' => 'Vehicle',
                'category_id' => 3,
                'description' => 'Company vehicles and transportation assets',
            ],
            [
                'id' => 15,
                'name' => 'Truck',
                'category_id' => 3,
                'description' => 'Trucks and commercial vehicles',
            ],

            // Machinery and Equipment
            [
                'id' => 6,
                'name' => 'Machinery',
                'category_id' => 4,
                'description' => 'Heavy machinery and equipment',
            ],
            [
                'id' => 16,
                'name' => 'Construction Equipment',
                'category_id' => 4,
                'description' => 'Construction machinery and equipment',
            ],

            // Office Supplies
            [
                'id' => 7,
                'name' => 'Office Chairs',
                'category_id' => 5,
                'description' => 'Various office supplies and consumables',
            ],

            // Buildings and Real Estate
            [
                'id' => 25,
                'name' => 'Building',
                'category_id' => 6,
                'description' => 'Buildings and real estate assets',
            ],

            // Software Licenses
            [
                'id' => 17,
                'name' => 'Software',
                'category_id' => 7,
                'description' => 'Software applications and programs',
            ],

            // Communication Devices
            [
                'id' => 18,
                'name' => 'Tablet',
                'category_id' => 8,
                'description' => 'Tablets and mobile devices',
            ],

            // Tangible Assets
            [
                'id' => 9,
                'name' => 'Specialized Equipment',
                'category_id' => 9,
                'description' => 'Specialized equipment and instruments',
            ],

            // Additional Types
            [
                'id' => 19,
                'name' => 'Camera',
                'category_id' => 1,
                'description' => 'Cameras and photography equipment',
            ],
            [
                'id' => 20,
                'name' => 'Chair',
                'category_id' => 2,
                'description' => 'Various types of chairs',
            ],
            [
                'id' => 21,
                'name' => 'Motorcycle',
                'category_id' => 3,
                'description' => 'Motorcycles and two-wheeler vehicles',
            ],
            [
                'id' => 22,
                'name' => 'Power Tools',
                'category_id' => 4,
                'description' => 'Power tools and handheld equipment',
            ],
            [
                'id' => 23,
                'name' => 'Subscription',
                'category_id' => 7,
                'description' => 'Subscription-based software and services',
            ],
            [
                'id' => 24,
                'name' => 'Phone',
                'category_id' => 8,
                'description' => 'Mobile phones and smartphones',
            ],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }

    }
}
