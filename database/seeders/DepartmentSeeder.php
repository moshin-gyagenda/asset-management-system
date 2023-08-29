<?php

namespace Database\Seeders;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'id' => 1,
                'department_name' => 'IT Department',
                'description' => 'This is an IT Department.',
            ],
            [
                'id' => 2,
                'department_name' => 'Finance Department',
                'description' => 'This is a Finance Department.',
            ],
            [
                'id' => 3,
                'department_name' => 'Human Resources Department',
                'description' => 'This is a Human Resources Department.',
            ],
            [
                'id' => 4,
                'department_name' => 'Operations Department',
                'description' => 'This is an Operations Department.',
            ],
            [
                'id' => 5,
                'department_name' => 'Sales Department',
                'description' => 'This is a Sales Department.',
            ],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
