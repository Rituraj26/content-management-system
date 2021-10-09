<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\PriorityList;

class PriorityListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedPriorityLists();
    }

    public function seedPriorityLists()
    {
        $priorityLists = [
            [
                'id' => 1,
                'feature_id' => 1,
                'name' => 'low',
            ],
            [
                'id' => 2,
                'feature_id' => 1,
                'name' => 'medium',
            ],
            [
                'id' => 3,
                'feature_id' => 1,
                'name' => 'high',
            ]
        ];

        foreach ($priorityLists as $priorityList) {
            PriorityList::updateOrCreate(Arr::only($priorityList, 'id'), $priorityList);
        }
    }
}
