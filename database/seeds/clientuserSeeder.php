<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		DB::table('clientusers')->insert([
			'name' 				=> 'Jeric Admin',
			'email'				=>	'k.jericricafrente@gmail.com',
			'password'			=> Hash::make('password'),
			'remember_token'	=> str_random(10),  
		]);
     
    }
}
