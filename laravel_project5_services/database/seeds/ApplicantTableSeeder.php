<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker ;
class ApplicantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0 ; $i<50 ; $i++){
            DB::table('pending_requests')->insert([
                'category_id'=>rand(1,3),
                'pending_name'=>$faker->unique()->userName,
                'pending_email'=>$faker->unique()->email,
                'pending_mobile'=>$faker->randomNumber(5),
//                'pending_city'=>rand(Amman , Irbid , Mafraq),
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now(),
                'pending_desc'=>$faker->text(200),
                'pending_image' => 'https://cdn4.vectorstock.com/i/1000x1000/35/28/woman-avatar-isolated-faceless-female-cartoon-vector-21453528.jpg'
//                'pending_subscription_type'=>rand(3 Months , 6 Months , 1 Year),
            ]);
        }
    }
}
