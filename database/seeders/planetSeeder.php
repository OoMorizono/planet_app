<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class planetSeeder extends Seeder
{
    public function run()
    {
    $param = [
        [
            'name' => '水星',
            'enname' => 'MERCURY',
            'radius' => '2439',
            'weight' => '3310',
        ],
        [
            'name' => '金星',
            'enname' => 'VENUS',
            'radius' => '6052',
            'weight' => '48700',
        ],
        [
            'name' => '地球',
            'enname' => 'EARTH',
            'radius' => '6378',
            'weight' => '59760',
        ],
        [
            'name' => '火星',
            'enname' => 'MARS',
            'radius' => '3397',
            'weight' => '6420',
        ],
        [
            'name' => '木星',
            'enname' => 'JUPITER',
            'radius' => '71492',
            'weight' => '18993500',
        ],
        [
            'name' => '土星',
            'enname' => 'SATURN',
            'radius' => '60268',
            'weight' => '5685980',
        ],
        [
            'name' => '天王星',
            'enname' => 'URANUS',
            'radius' => '25559',
            'weight' => '868910',
        ],
        [
            'name' => '海王星',
            'enname' => 'NEPTUNE',
            'radius' => '24764',
            'weight' => '1029660',
        ]
    ];
    DB::table('planets')->insert($param);
    }
}
