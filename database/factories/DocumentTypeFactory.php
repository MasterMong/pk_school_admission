<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\DocumentType;

class DocumentTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DocumentType::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'display_name' => $this->faker->word(),
            'des' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'img' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'doc_type' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'attr' => '{}',
        ];
    }
}
