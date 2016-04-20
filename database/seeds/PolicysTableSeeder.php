<?php

use Illuminate\Database\Seeder;


class PolicysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1,10) as $index)
        {
        	App\Policy::create([
        		'company' => $faker->company, 
        		'policy_type' => $faker->word,
        		'medical_copay' => $faker->randomDigit, 
        		'lab_copay' => $faker->randomDigit,
        		'pharmacy_copay' => $faker->randomDigit 
        		]);
        }
    }
}
