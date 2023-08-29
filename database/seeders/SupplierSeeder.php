<?php

namespace Database\Seeders;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array containing the supplier data
        $suppliers = [
            [
                'id' => 1,
                'name' => 'Nile Technologies',
                'contact_person' => 'Semwanga Ivan',
                'email' => 'info@niletech.com',
                'phone' => '+256-700-000000',
                'address' => 'Kampala, Uganda',
                'website' => 'www.niletech.com',
                'is_active' => true,
            ],
            [
                'id' => 2,
                'name' => 'Furniture Express',
                'contact_person' => 'Mosh Matovu',
                'email' => 'info@furnitureexpress.com',
                'phone' => '+256-700-111111',
                'address' => 'Kampala, Uganda',
                'website' => 'www.furnitureexpress.com',
                'is_active' => true,
            ],
            [
                'id' => 3,
                'name' => 'IT Solutions Ltd',
                'contact_person' => 'David Tumusiime',
                'email' => 'info@itsolutions.com',
                'phone' => '+256-700-222222',
                'address' => 'Kampala, Uganda',
                'website' => 'www.itsolutions.com',
                'is_active' => true,
            ],
        ];
        // To Loop through the suppliers and create records in the 'suppliers' table
        foreach ($suppliers as $supplier) {
            Supplier::create($supplier);
        }
    }

}
