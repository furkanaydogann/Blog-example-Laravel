<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','furkancan_98@hotmail.com')->first();

        if(!$user){
            User::create([
                'name' => 'Furkan Aydogan',
                'email' => 'furkancan_98@hotmail.com',
                'role' => 'admin',
                'password' => Hash::make('password')
            ]);
        }
    }
}
