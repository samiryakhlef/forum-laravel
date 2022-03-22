<?php

use App\User;

use UserTableSeeder;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $user = new User;
            $user->nom = $faker->lastName;
            $user->prenoms = $faker->firstName;
            $user->email = $faker->unique()->email;
            $user->date_naissance = $faker->dateTimeThisCentury->format('Y-m-d');
            $user->password = bcrypt('123456');
            $user->telephone = $faker->phoneNumber;
            $user->save();
        }
    }
}