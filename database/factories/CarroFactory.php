<?php

namespace Database\Factories;

use App\Models\Carro;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carro>
 */
class CarroFactory extends Factory
{

    protected $model = Carro::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->randomElement(['Toyota', 'Honda', 'Ford', 'Chevrolet']),
            'modelo' => $this->faker->word,
            'anio' => $this->faker->numberBetween(2000, 2023),
            'precio' => $this->faker->randomFloat(2, 10000, 100000),
            'descripcion' => $this->faker->text,
            'disponible' => $this->faker->boolean,
            'tipo_combustible' => $this->faker->randomElement(['Gasolina', 'Diesel', 'Eléctrico', 'Híbrido']),
            'fecha_fabricacion' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'categoria_id' => Categoria::inRandomOrder()->first()->id
        ];
    }
}
