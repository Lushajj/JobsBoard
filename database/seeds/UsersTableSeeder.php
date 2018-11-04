<?php

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
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'Lushajj',
            'email' => 'deneme@gmail.com',
            'password' => Hash::make('12345'),
            'img' => 'https://via.placeholder.com/105x100',
            'phone' => '1233333333',
            'admin' => 1
        ]);
        for ($i=0; $i <50 ; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'password' => Hash::make('12345'),
                'img' => 'https://via.placeholder.com/105x100',
                'phone' => $faker->tollFreePhoneNumber,
                'company' => rand(0,1),
                'personal' => rand(0,1)
            ]);
        }
    }
}
