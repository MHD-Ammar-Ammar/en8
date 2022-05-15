<?php

namespace Database\Seeders;

/// Start ammar code

use App\Models\inverter;
use Illuminate\Database\Seeder;

// End ammar code

class InverterSeeder extends Seeder
{

    protected $inverters = [
        [
            'name' => "inverterName1",
            'ip' => "139.254.232.111",
            'warnings' => "0",
        ],
        [
            'name' => "inverterName2",
            'ip' => "139.254.232.112",
            'warnings' => "1",
        ],
        [
            'name' => "inverterName3",
            'ip' => "139.254.232.113",
            'warnings' => "2",
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Start Ammar Code
        // foreach ($this->inverters as $inverter) {
        //     $inverters = new Inverter($inverter);
        //     $inverters->save();
        // }
        for ($i = 100; $i <= 103; $i++) {
            $x=0;
            inverter::create([
                'name' => "inverterName$i",
                'ip' => "$i.254.232.113",
                'warnings' => "1" ,
            ]);
        }
    }
}
