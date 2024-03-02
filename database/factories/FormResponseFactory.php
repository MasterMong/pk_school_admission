<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Form;
use App\Models\FormResponse;

class FormResponseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FormResponse::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'form_id' => Form::factory(),
            'cid' => $this->faker->regexify('[A-Za-z0-9]{13}'),
            'code' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'value' => '{}',
            'status' => $this->faker->regexify('[A-Za-z0-9]{50}'),
        ];
    }
}
