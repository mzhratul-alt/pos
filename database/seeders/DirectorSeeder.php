<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Directors\Director;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Director::create([
            'name'=>'Md. Zahid-Director',
            'email'=>'mzh.cit.bd@gmail.com',
            'password'=>Hash::make('@mzhratul'),
        ]);
    }
}
