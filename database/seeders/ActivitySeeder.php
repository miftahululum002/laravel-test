<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list =[
            'Cincang 4 Inch Tebal',
            'Cuci Parit Pinggir 12FT',
        ];

        foreach ($list as $l =>$activity) {
            Activity::create(['name'=>$activity]);
        }

    }
}
