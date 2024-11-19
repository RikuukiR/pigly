<?php

namespace Database\Factories;

use App\Models\WeightLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogFactory extends Factory
{
    protected $model = WeightLog::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'weight' => $this->faker->randomFloat(1, 50, 100),
            'logged_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}