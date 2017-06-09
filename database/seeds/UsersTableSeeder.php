<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([

                        'first_name'      => 'Elie',
                        'last_name'   => 'Ishimwe',
                        'email'     => 'elie@ubulwembu.net',
                        'password'  =>  bcrypt('198430'),
                        'cell_number' => '0829699114',
                        
        ]);
    }
}
