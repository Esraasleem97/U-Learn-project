<?php

namespace Database\Factories;

use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Books::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $books = [
            'قواعد بيانات',
            'برمجة كينونة',
            'شبكات الحاسوب',
            'معالجة الوسائط الرقمية',

            'امن المعلومات',
            'اساسيات البرمجة',
            'python',

            'c++',
            'java',
            'php',
            'هيكلة البيانات',

            'erp systems',
            'system analyst 1',
            'system analyst 2',
            'multimedia',
            'mysql',

        ];

        return [
            'name' => $this->faker->randomElement($books),
            'year' => $this->faker->numberBetween(1, 4)
        ];
    }
}
