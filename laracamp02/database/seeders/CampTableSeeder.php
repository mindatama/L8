<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [['title' => 'daily', 'slug' => 'daily', 'price' => 140,
    'created_at' => date('Y-m-d H:i:s', time()),
    'updated_at' => date('Y-m-d H:i:s', time()),
    ],
    ['title' => 'non rutin', 'slug' => 'non-rutin', 'price' => 280,
    'created_at' => date('Y-m-d H:i:s', time()),
    'updated_at' => date('Y-m-d H:i:s', time()),
    ]
    ];

    foreach ($camps as $key => $camp){
        Camp::create($camp);
    }
    }
}
