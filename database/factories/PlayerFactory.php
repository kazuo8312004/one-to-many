<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "player_name"=> $this->faker->name,
            "admin_id"=> Admin::factory(),
        ];
    }
}