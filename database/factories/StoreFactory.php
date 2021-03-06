<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Store::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->jobTitle();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'status' => 'on',
            'user_id' => 2,
            'category_id' => $this->faker->numberBetween(1,3)
        ];
    }
}
