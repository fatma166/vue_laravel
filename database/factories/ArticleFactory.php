<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
              
        return [
            //
            'title' =>$this->faker->text(100),
            'subtitle' => $this->faker->text(200),
            'description' => $this->faker->text(400),
          
            'img' => $this->faker->imageUrl($width = 400, $height = 400) ,

        ];
    }
}
