<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('username','Admin')->first();
        if (empty($user)){
            User::create([
                'name' => "Admin",
                'username' => "Admin",
                'email' => "deryakorkmaz106@gmail.com",
                'password' => Hash::make("12341234")
            ]);
        }
    }
}