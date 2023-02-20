<?php

namespace Database\Seeders;

use App\Models\Directors\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $departments = ['Department', 'Quality'];

        foreach ($departments as $department) {
            Department::create([
                'name' => $department,
                'slug' => strtolower($department),
            ]);
        }
    }
}
