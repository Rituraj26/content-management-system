<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use App\Models\Tag;
use App\Models\StatusList;
use App\Models\PriorityList;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = Carbon::now();
        $collectionUsers = collect([1, 2]);
        $collectionTags = collect([1, 2, 3]);
        $collectionStatusLists = collect([1, 2, 3]);
        $collectionPriorityLists = collect([1, 2, 3]);
        return [
            'user_id' => $collectionUsers->random(),
            'tag_id' => $collectionTags->random(),
            'status_list_id' => $collectionStatusLists->random(),
            'priority_list_id' => $collectionPriorityLists->random(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'due_at' => $date->toDateTimeString()
        ];
    }
}
