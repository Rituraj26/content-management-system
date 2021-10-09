<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedTags();
    }

    public function seedTags()
    {
        $tags = [
            [
                'id' => 1,
                'feature_id' => 1,
                'name' => 'meeting',
                'color' => 'red',
                'icon' => 'users'
            ],
            [
                'id' => 2,
                'feature_id' => 1,
                'name' => 'chilling',
                'color' => 'blue',
                'icon' => 'coffee'
            ],
            [
                'id' => 3,
                'feature_id' => 1,
                'name' => 'shopping',
                'color' => 'green',
                'icon' => 'shopping-cart'
            ]
        ];

        foreach ($tags as $tag) {
            Tag::updateOrCreate(Arr::only($tag, 'id'), $tag);
        }
    }
}
