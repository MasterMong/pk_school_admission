<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Setting;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'key' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'value' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'is_toggle' => $this->faker->word(),
            'des' => $this->faker->regexify('[A-Za-z0-9]{500}'),
        ];
    }
}
