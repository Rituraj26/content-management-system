<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedFeatures();
    }

    public function seedFeatures()
    {
        $features = [
            [
                'id' => 1,
                'name' => 'tasks'
            ]
        ];
        foreach ($features as $feature) {
            Feature::updateOrCreate(Arr::only($feature, 'id'), $feature);
        }
    }
}
