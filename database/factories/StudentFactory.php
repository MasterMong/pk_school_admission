<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Level;
use App\Models\Student;

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
     */
    public function definition(): array
    {
        return [
            'sid' => $this->faker->word(),
            'cid' => $this->faker->regexify('[A-Za-z0-9]{13}'),
            'level_id' => Level::factory(),
            'room' => $this->faker->word(),
            'no' => $this->faker->word(),
            'status' => $this->faker->regexify('[A-Za-z0-9]{50}'),
        ];
    }
}
