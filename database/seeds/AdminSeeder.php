<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {
            \App\Admin::create([
                'username' => $faker->userName,
                'password' => bcrypt('admin')
            ]);
        }
    }
}
