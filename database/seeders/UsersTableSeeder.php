<?php

use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $faker = Faker\Factory::create();
     foreach (range(1,50) as $index) {
      $data = [
       'name' => $faker->name,
       'email' => $faker->unique()->safeEmail,
       'password' => bcrypt('secret'),
       'remember_token' => Str::random(10),
      ];
      User::create($data);
     }
    }
}