<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            [
                "name" => "Quyền lực tối cao",
                "email" => "huynhvanphap198@gmail.com",
                "password" => Hash::make('Ab12345!'),
                "remember_token" => ""
            ],

        ];

        User::truncate();
        User::insert($data);
    }
}
