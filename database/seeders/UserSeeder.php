<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Contact,
                User,
                Country,
};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password')
        ]);
        Contact::create([
            'user_id' => 1 ,
            'phone_no' => '1234567980',
            'address' => 'Delhi,Pritampur'
        ]);

        Country::create([
            'country_name' => 'india',
        ]);
    }
}
