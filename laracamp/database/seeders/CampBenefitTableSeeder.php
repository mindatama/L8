<?php

namespace Database\Seeders;

use App\Models\Campbenefits;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefit = [[
            'camp_id' => 1,
            'name' => 'Pro tech'
        ],[
            'camp_id' => 1, 'name' => 'icam'
        ],[
            'camp_id' => 1, 'name' => 'mentoring private'
        ],[
            'camp_id' => 1, 'name' => 'final project'
        ],[
            'camp_id' => 1, 'name' => 'offline'
        ],[
            'camp_id' => 1, 'name' => 'future'
        ],[
            'camp_id' => 1, 'name' => 'premium'
        ],[
            'camp_id' => 1, 'name' => 'premax'
        ],[
            'camp_id' => 2, 'name' => 'mentoring prive'
        ],[
            'camp_id' => 2, 'name' => 'final proj'
        ],[
            'camp_id' => 2, 'name' => 'icam'
        ]];
        Campbenefits::insert($campBenefit);
    }
}
