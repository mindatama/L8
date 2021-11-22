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
        $camps = [['title' => 'gila belajar', 'slug' => 'gila-belajar', 'price' => 140,
    'created_at' => date('Y-m-d H:i:s', time()),
    'created_at' => date('Y-m-d H:i:s', time()),
    ],
    ['title' => 'baru mulai', 'slug' => 'baru-mulai', 'price' => 280,
    'created_at' => date('Y-m-d H:i:s', time()),
    'created_at' => date('Y-m-d H:i:s', time()),
    ]
    ];

    foreach ($camps as $key => $camp){
        Camp::create($camp);
    }

    }
}
