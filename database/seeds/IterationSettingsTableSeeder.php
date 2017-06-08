<?php

use Illuminate\Database\Seeder;
use App\IterationSetting;

class IterationSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IterationSetting::create([

                        'iteration_id' => 1,
                        'endpoint'     => 'google.com',
                        'bg_image'     => 'C:\Users\Njabulo\Desktop\angularjs-de-intensivworkshop-ajs-typescript',
                        'logo'         =>  'C:\Users\Njabulo\Desktop\angularjs-de-intensivworkshop-ajs-typescript',
        ]);
    }
}
