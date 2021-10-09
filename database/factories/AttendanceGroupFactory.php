<?php

namespace Database\Factories;

use App\Models\AttendanceGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AttendanceGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'description'=>$this->faker->sentence(10),
            'school_id'=>rand(1,10),
            'difficulty'=>$this->faker->sentence(10),
        ];
    }
}
