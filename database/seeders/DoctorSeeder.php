<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table("doctors")->insert([
         'first_name' => "Ahmed",
         'last_name' => "Mohamed",
         'email' => 'eee@gmail.com',
         'password' => '12345678'
         'age' => 35,
         'gender' => "male",
         'email_verified_at' => Carbon::now(),
         'address' => "cairo st cairo 55",
         'city' => 'cairo',
         'governorate' => "cairo",
         'specialty' => "heart",
         
       ])
    }
}
