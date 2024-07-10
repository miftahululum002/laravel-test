<?php

namespace Database\Seeders;

use App\Models\Machine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list =[
            'LYK01',
            'LYK10',
            'LYK206',
            'LYK11',
            'LYK205',
        ];
        foreach ($list as $l => $machine) {
            Machine::create(['name'=>$machine]);
        }
    }
}
