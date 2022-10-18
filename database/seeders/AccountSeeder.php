<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Accounts\Account;
use App\Http\Middleware\Accounts;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
            'name'=>'Md. Zahid-Account',
            'email'=>'mzh.cit.bd@gmail.com',
            'password'=>Hash::make('@mzhratul'),
        ]);
    }
}
