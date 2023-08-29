<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array containing the category data
        $categories = [
            [
                'id'=>1,
                'category_name' => 'IT Equipment',
                'description' => 'Includes computers, laptops, servers, networking devices, and other IT-related equipment.',
            ],
            [
                'id'=>2,
                'category_name' => 'Furniture and Fixtures',
                'description' => 'Includes desks, chairs, tables, cabinets, shelves, and other furniture items.',
            ],
            [
                'id'=>3,
                'category_name' => 'Vehicles',
                'description' => 'Includes cars, trucks, vans, and other types of vehicles.',
            ],
            [
                'id'=>4,
                'category_name' => 'Machinery and Equipment',
                'description' => 'Includes heavy machinery, manufacturing equipment, tools, and specialized equipment.',
            ],
            [
                'id'=>5,
                'category_name' => 'Office Supplies',
                'description' => 'Includes stationery, office supplies, and consumables.',
            ],
            [
                'id'=>6,
                'category_name' => 'Buildings and Real Estate',
                'description' => 'Includes buildings, offices, warehouses, and other real estate assets.',
            ],
            [
                'id'=>7,
                'category_name' => 'Software Licenses',
                'description' => 'Includes software licenses, subscriptions, and digital assets related to software usage.',
            ],
            [
                'id'=>8,
                'category_name' => 'Communication Devices',
                'description' => 'Includes phones, tablets, and other communication devices.',
            ],
            [
                'id'=>9,
                'category_name' => 'Tangible Assets',
                'description' => 'Includes specialized equipment, instruments, and unique items specific to the company.',
            ],
        ];
        // To Loop through the categories and create records in the 'categories' table
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
