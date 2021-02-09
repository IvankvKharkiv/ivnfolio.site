<?php

namespace Database\Factories;

use App\Models\FilmCrewProfession;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmCrewProfessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FilmCrewProfession::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'profession'=>'profession',
        ];
    }
}
