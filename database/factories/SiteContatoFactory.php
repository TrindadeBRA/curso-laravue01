<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContatoFactory extends Factory
{
    public function definition()
    {
        return [
            "nome" => $this->faker->name,
            "telefone" =>  $this->faker->phoneNumber(),
            "email" =>  $this->faker->unique()->email,
            "mensagem" =>  $this->faker->text(100),
            "motivo_contatos_id" =>  $this->faker->numberBetween(1,3)
        ];
    }
}
