<?php

namespace Database\Seeders;
use App\Models\AssetRequest;
use App\Models\User;
use App\Models\Asset;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AssetRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create sample asset requests
            $requests = [
                [
                    'user_id' => 1, // Replace with the desired user ID
                    'asset_id' => 1, // Replace with the desired IT asset ID
                    // 'asset_name' => 'HP Laptop',
                    'quantity' => '5',
                    'specification' => 'Sample specification for IT asset request 1',
                    'purpose' => 'Sample purpose for IT asset request 1',
                    'request_date' => Carbon::now(),

                ],
                [
                    'user_id' => 1, // Replace with the desired user ID
                    'asset_id' => 2, // Replace with the desired IT asset ID
                    // 'asset_name' => 'Office Chair',
                    'quantity' => '10',
                    'specification' => 'Sample specification for IT asset request 2',
                    'purpose' => 'Sample purpose for IT asset request 2',
                    'request_date' => Carbon::now(),

                ],
                // Add more sample requests as needed
            ];

            // Insert the requests into the database
            AssetRequest::insert($requests);

    }
}
