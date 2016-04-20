<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); 

        $policy = App\Policy::all()->lists('id');
        foreach(range(1,10) as $index)
        {
        	$patient = App\Patient::create([
        		'address' => $faker->address, 
        		'phone' => $faker->phoneNumber,
        		'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
        		'relationship_to_insured' => $faker->firstNameMale,
        		'policy_id' => $faker->randomElement($policy)
        	]);
        }

    }
}
