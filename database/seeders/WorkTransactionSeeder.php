<?php

namespace Database\Seeders;

use App\Models\WorkTransaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            [
                'user_id' => 1,
                'site_id' => 1,
                'activity_id' => 1,
                'uom' => 'Pokok',
                'block' => 116,
                'task' => 'A1',
                'start' => '07:00',
                'end' => '08:00',
                'machine_id' => 1,
                'fuel' => 200,
                'duty' => 'On Duty',
            ],
            [
                'user_id' => 2,
                'site_id' => 1,
                'activity_id' => 2,
                'uom' => 'Pokok',
                'block' => 116,
                'task' => 'A1',
                'start' => '07:30',
                'end' => '08:30',
                'machine_id' => 2,
                'fuel' => 200,
                'duty' => 'On Duty',
            ],
            [
                'user_id' => 3,
                'site_id' => 1,
                'activity_id' => 1,
                'uom' => 'Meter',
                'block' => 116,
                'task' => 'A1',
                'start' => '07:30',
                'end' => '08:30',
                'machine_id' => 3,
                'fuel' => 200,
                'duty' => 'On Duty',
            ],
            [
                'user_id' => 4,
                'site_id' => 1,
                'activity_id' => 1,
                'uom' => 'Meter',
                'block' => 116,
                'task' => 'A1',
                'start' => '07:30',
                'end' => '08:30',
                'machine_id' => 4,
                'fuel' => 200,
                'duty' => 'On Duty',
            ],
            [
                'user_id' => 5,
                'site_id' => 1,
                'activity_id' => 1,
                'uom' => 'Meter',
                'block' => 116,
                'task' => 'A1',
                'start' => '10:30',
                'end' => '11:30',
                'machine_id' => 5,
                'fuel' => 200,
                'duty' => 'On Duty',
            ],
        ];

        WorkTransaction::insert($list);
    }
}
