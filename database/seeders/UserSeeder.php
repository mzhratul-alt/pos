<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'employee_id'=>'123',
            'name'=>'Md. Zahid Hossain',
            'email'=>'mzh.cit.bd@gmail.com',
            'phone'=>'+8801777797141',
        ]);
    }
}
