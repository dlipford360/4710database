<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
//        DB::table('patientvisit_procedurenote')->insert(array(
//            array('patientvisit_id' => 1, 'procedurenote_id' => 1),
//            array('patientvisit_id' => 2, 'procedurenote_id' => 2),
//            array('patientvisit_id' => 3, 'procedurenote_id' => 1),
//            array('patientvisit_id' => 3, 'procedurenote_id' => 3),
//            array('patientvisit_id' => 3, 'procedurenote_id' => 5)
//        ));
//        DB::table('patientvisit_service')->insert(array(
//            array('patientvisit_id' => 1, 'service_id' => 1),
//            array('patientvisit_id' => 2, 'service_id' => 2),
//            array('patientvisit_id' => 3, 'service_id' => 1),
//            array('patientvisit_id' => 3, 'service_id' => 3),
//            array('patientvisit_id' => 3, 'service_id' => 5)
//        ));
//        DB::table('drugscript_patientvisit')->insert(array(
//            array( 'drugscript_id' => 1,'patientvisit_id' => 1,),
//            array( 'drugscript_id' => 2,'patientvisit_id' => 2,),
//            array( 'drugscript_id' => 1,'patientvisit_id' => 3,),
//            array( 'drugscript_id' => 3,'patientvisit_id' => 3,),
//            array( 'drugscript_id' => 5,'patientvisit_id' => 3,)
//        ));
        foreach (range(1, 20) as $index) {
            DB::table('diagnosiss')->insert([
                'diagnosis_name' => $faker->company,

            ]);
            DB::table('diagnosisnotes')->insert([
                'diagnosis_id' => $faker->numberBetween($min = 1, $max = 6),
                'date_of_onset' => $faker->dateTime,
                'symptoms'=> $faker->locale,
                'severity' => $faker->company,
                'prognosis' => $faker->colorName,
                'patientvisit_id' => $faker->numberBetween($min = 1, $max = 6),

            ]);

            DB::table('drugs')->insert([
                'drug_name' => $faker->country,

            ]);

            DB::table('drugscripts')->insert([
                'num_refills' => $faker->numberBetween($min = 1, $max = 10),
                'qty' => $faker->numberBetween($min = 100, $max = 1000),
                'instructions'=> $faker->paragraph,
            ]);
            DB::table('invoices')->insert([
                'bill_date' => $faker->dateTime,
                'total_amount' => $faker->numberBetween($min = 100, $max = 200),
                'due_date' => $faker->dateTime,
                'amount_paid' => $faker->numberBetween($min = 1, $max = 100),
                'patientvisit_id' =>$faker->numberBetween($min = 1, $max = 5),
                'parent_id' =>$faker->numberBetween($min = 1, $max = 5),

            ]);
            DB::table('medicalprescriptions')->insert([
                'date_dispensed' => $faker->dateTime,
                'quantity_dispensed' => $faker->numberBetween($min = 1, $max = 100),
                'refills_remaining' => $faker->numberBetween($min = 100, $max = 200),
                'cost' =>  $faker->numberBetween($min = 100, $max = 200),


            ]);

            DB::table('patients')->insert([
                'name' => $faker->name,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'dob' => $faker->dateTime,
                'relationship_to_insured' => $faker->country,
                'policy_id' => $faker->numberBetween($min = 1, $max = 10),

            ]);
            DB::table('patientvisits')->insert([
                'visit_date' => $faker->dateTime,
                'visit_time' => $faker->dateTime,
                'duration' => $faker->numberBetween($min = 100, $max = 200),
                'reason' => $faker->sentence,
                'room_condition' => $faker->sentence,
                'room_id' => $faker->numberBetween($min = 1, $max = 6),
                'staff_id' =>$faker->numberBetween($min = 1, $max = 6),
                'patient_id' =>$faker->numberBetween($min = 1, $max = 6),

            ]);

            DB::table('payments')->insert([
                'amountpaid' => $faker->numberBetween($min = 1, $max = 200),
                'datepaid' => $faker->dateTime,
                'invoice_id' => $faker->numberBetween($min = 1, $max = 6),

            ]);
            DB::table('policys')->insert([
                'company' => $faker->name,
                'policy_type' => $faker->colorName,
                'medical_copay' => $faker->numberBetween($min = 1, $max = 200),
                'lab_copay' => $faker->numberBetween($min = 1, $max = 200),
                'pharmacy_copay' => $faker->numberBetween($min = 1, $max = 200),

            ]);

            DB::table('procedures')->insert([
                'procedure_name' => $faker->city,
                'procedure_cost' => $faker->numberBetween($min = 100, $max = 200),

            ]);

            DB::table('procedurenotes')->insert([
                'procedure_id' => $faker->numberBetween($min = 1, $max = 6),
                'procedure_result' => $faker->sentence,

            ]);


            DB::table('referrals')->insert([
                'staff_id' => $faker->numberBetween($min = 1, $max = 6),
                'patientvisit_id' => $faker->numberBetween($min = 1, $max = 6),
                'doctor_name' => $faker->name,
                'referral_reason' => $faker->paragraph,

            ]);

            DB::table('rooms')->insert([
                'roomtype' => $faker->colorName,


            ]);
            DB::table('services')->insert([
                'service_type' => $faker->sentence,
                'service_cost' => $faker->numberBetween($min = 100, $max = 200),

            ]);

            DB::table('staffs')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'title' => $faker->citySuffix,
                'speciality' => $faker->monthName,
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber,
            ]);



            DB::table('tests')->insert([
                'test_name' => $faker->domainWord,
                'test_cost' => $faker->numberBetween($min = 100, $max = 200),
                'test_time' => $faker->numberBetween($min = 100, $max = 200),

            ]);


        }
        foreach (range(1, 20) as $index) {

            DB::table('patientvisit_procedurenote')->insert([
                'procedurenote_id' => $faker->numberBetween($min = 1, $max = 6),
                'patientvisit_id' => $faker->numberBetween($min = 1, $max = 6),

            ]);
            DB::table('drugscript_patientvisit')->insert([
                'drugscript_id' => $faker->numberBetween($min = 1, $max = 6),
                'patientvisit_id' => $faker->numberBetween($min = 1, $max = 6),

            ]);
            DB::table('patientvisit_service')->insert([
                'service_id' => $faker->numberBetween($min = 1, $max = 6),
                'patientvisit_id' => $faker->numberBetween($min = 1, $max = 6),

            ]);


        }
    }

}
