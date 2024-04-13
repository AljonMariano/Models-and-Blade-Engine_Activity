<?php

namespace Database\Factories\Models;

use App\Models\Models\Book; 
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      
        return [


            'id' => $this->faker->unique()->randomNumber(),
            'isbn' => $this->faker->isbn13(),
            'title' => $this->faker->sentence(4),
            'author' => $this->faker->name(),
            'description' => $this->faker->paragraph(3),
            'date_published' => $this->faker->date(),
        ];
    }
}
