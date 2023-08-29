<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asset;
class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assets = [
            [
                'id' => 1,
                'category_id' => 1,
                'manufacturer_id' => 1,
                'supplier_id' => 1,
                'type_id' => 1,
                'name' => 'HP Laptop',
                'serial_number' => 'ABC123',
                'purchase_price' => 12000000.00,
                'purchase_date' => '2023-01-15',
                'status' => 'active',
                'description' => 'A high-performance laptop for professional use.',
                'barcode' => '123456789',
            ],
            [
                'id' => 2,
                'category_id' => 2,
                'manufacturer_id' => 2,
                'supplier_id' => 2,
                'type_id' => 4,
                'name' => 'Office Chair',
                'serial_number' => 'XYZ789',
                'purchase_price' => 250000.00,
                'purchase_date' => '2023-02-20',
                'status' => 'active',
                'description' => 'A comfortable and ergonomic office chair.',
                'barcode' => '987654321',
            ],
        ];

        foreach ($assets as $asset) {
            Asset::create($asset);
        }

    }
}
