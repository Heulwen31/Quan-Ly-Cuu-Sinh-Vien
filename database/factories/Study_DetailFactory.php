<?php

namespace Database\Factories;

use App\Models\Study_Detail;
use Illuminate\Database\Eloquent\Factories\Factory;

class Study_DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Study_Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->numerify($string='1#0213##'),
            'consultant' => $this->faker->name,
            'gpa' => $this->faker->numerify($string='#.##'),
            'cpa' => $this->faker->numerify($string='#.##'),
            'point_training' => $this->faker->numberBetween($min=50,$max=100),
            'course' => $this->faker->numerify($string='K##'),
        ];
    }
}
