<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(ManufacturerSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(AssetSeeder::class);
        $this->call(AssetRequestSeeder::class);


    }
}
