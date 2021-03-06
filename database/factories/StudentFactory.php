<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->firstName(),
            'surname'=>$this->faker->lastName(),
            //'group_id'=>rand(1,10),
            'group_id'=>$this->faker->randomDigit(),
            'image_url'=>$this->faker->imageUrl(300,300, "animals", true),// (nurodo pvz dydi)
        ];
    }
}
