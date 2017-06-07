<?php

use Illuminate\Database\Seeder;

class IterationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iterations')->insert([
	
		'slug' => 'AIMS',
		'name' => 'AIMS',
		'version' => '3.2.1',
		'installs' => '50'
	
	]);
    }
}
