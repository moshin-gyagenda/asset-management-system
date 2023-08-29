<?php

namespace Database\Seeders;
use App\Models\Manufacturer;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array containing the Manfacturers data
        $manufacturers = [
            // IT Equipment Manufacturers
            [
                'id' => 1,
                'name' => 'Dell Technologies',
                'country' => 'United States',
                'email' => 'info@dell.com',
                'contact' => '+1-866-438-3622',
            ],
            [
                'id' => 2,
                'name' => 'HP Inc.',
                'country' => 'United States',
                'email' => 'info@hp.com',
                'contact' => '+1-650-857-1501',
            ],
            [
                'id' => 3,
                'name' => 'Lenovo Group',
                'country' => 'China',
                'email' => 'info@lenovo.com',
                'contact' => '+86-10-58868888',
            ],

            // Furniture Manufacturers
            [
                'id' => 4,
                'name' => 'Danube',
                'country' => 'Uganda',
                'email' => 'info@danube.com',
                'contact' => '+256-8-4532000',
            ],
        ];
        // To Loop through the manufacturers and create records in the 'manufacturers' table
        foreach ($manufacturers as $manufacturer) {
            Manufacturer::create($manufacturer);
        }
    }
}
