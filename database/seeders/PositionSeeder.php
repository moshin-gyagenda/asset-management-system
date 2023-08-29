<?php

namespace Database\Seeders;
use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            [
                'id' => 1,
                'position_name' => 'HR Manager',
                'description' => 'This is our HR Manager',
            ],
            [
                'id' => 2,
                'position_name' => 'Software Developer',
                'description' => 'This is a software developer position',
            ],
            [
                'id' => 3,
                'position_name' => 'Sales Executive',
                'description' => 'This is a sales executive position',
            ],
            [
                'id' => 4,
                'position_name' => 'Marketing Specialist',
                'description' => 'This is a marketing specialist position',
            ],
        ];

        foreach ($positions as $position) {
            Position::create($position);
        }
    }
}
