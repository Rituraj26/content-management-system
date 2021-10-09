<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\StatusList;

class StatusListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedStatusLists();
    }

    public function seedStatusLists()
    {
        $statusLists = [
            [
                'id' => 1,
                'feature_id' => 1,
                'name' => 'completed',
                'color' => 'green',
                'icon' => 'check'
            ],
            [
                'id' => 2,
                'feature_id' => 1,
                'name' => 'important',
                'color' => 'blue',
                'icon' => 'star'
            ],
            [
                'id' => 3,
                'feature_id' => 1,
                'name' => 'deleted',
                'color' => 'red',
                'icon' => 'trash'
            ]
        ];

        foreach ($statusLists as $statusList) {
            StatusList::updateOrCreate(Arr::only($statusList, 'id'), $statusList);
        }
    }
}
