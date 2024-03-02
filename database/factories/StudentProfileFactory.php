<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\FormResponse;
use App\Models\Student;
use App\Models\StudentProfile;

class StudentProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentProfile::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cid' => $this->faker->regexify('[A-Za-z0-9]{13}'),
            'prefix' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'fname' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'mname' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'lname' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'data' => '{}',
            'form_responses_id' => FormResponse::factory(),
            'student_id' => Student::factory(),
        ];
    }
}
