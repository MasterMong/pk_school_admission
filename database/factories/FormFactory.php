<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Form;
use App\Models\FormGroup;

class FormFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Form::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->word(),
            'form_group_id' => FormGroup::factory(),
            'name' => $this->faker->name(),
            'des' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'is_guest' => $this->faker->word(),
            'is_enable' => $this->faker->word(),
            'limit_time' => $this->faker->word(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'is_enabled' => $this->faker->word(),
            'fields' => '{}',
            'search_field' => '{}',
            'status' => '{}',
            'code_start' => $this->faker->regexify('[A-Za-z0-9]{40}'),
            'code_leading_zero_length' => $this->faker->word(),
            'default_status' => $this->faker->regexify('[A-Za-z0-9]{50}'),
        ];
    }
}
