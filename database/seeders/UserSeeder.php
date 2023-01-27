<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companyCode = 'IOM-';
        $yearCode = Carbon::now()->format('y');
        $monthCode = Carbon::now()->format('m');
        $dateCode = Carbon::now()->format('d');

        User::create([
            'employee_id'=>$companyCode.$yearCode.$monthCode.$dateCode.str_pad(1,5, "0",STR_PAD_LEFT),
            'profile_pic'=>'profile-image.png',
            'name'=>'Md. Zahid Hossain',
            'email'=>'mzh.cit.bd@gmail.com',
            'phone'=>'+8801777797141',
            'password'=>Hash::make('@mzhratul'),
        ]);
    }
}
