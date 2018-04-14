<?php

use Illuminate\Database\Seeder;

class UkmSeeder extends Seeder
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
            \App\Ukm::create([
                'id_ukm' => uniqid('ukm_'),
                'nama' => $faker->company,
                'singkatan' => $faker->firstName,
                'visi_misi' => $faker->realText(),
                'detail' => $faker->realText(),
                'email' => $faker->email,
                'telepon' => $faker->e164PhoneNumber,
                'logo' => $faker->fileExtension
            ]);
        }
    }
}
