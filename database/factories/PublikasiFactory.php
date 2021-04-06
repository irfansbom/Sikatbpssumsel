<?php

namespace Database\Factories;

use App\Models\publikasi;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublikasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = publikasi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'judul' => $this->faker->name,
            'abstrak' => $this->faker->address,
            'no_rak' => $this->faker->numberBetween(0, 10),
            'rl_date' => $this->faker->date,
            'pdf' => $this->faker->address,
            'cover' => $this->faker->email,
        ];
    }
}
