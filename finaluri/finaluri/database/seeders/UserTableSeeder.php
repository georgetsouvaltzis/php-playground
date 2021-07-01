<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();

        $faker = Factory::create();
    for($i = 0; $i < 10; $i++)
    {
        $user = User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt("finaluri")
        ]);
        //$user->password = $user->createToken('authToken')->accessToken;
//        $validatedData['password'] = bcrypt($request->password);
//        $user = User::create($validatedData);
//        $accessToken = $user->createToken('authToken')->accessToken;
//        return response(['user ' => $user, 'access_token' => $accessToken]);
    }
    }
}
