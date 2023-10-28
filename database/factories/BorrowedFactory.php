<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Borrowed;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrowed>
 */
class BorrowedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Borrowed::class;

    public function definition()
    {
        $borrowedStatus = ['Dipinjam', 'Dikembalikan', 'Terlambat', 'Hilang', 'Rusak'];

        $book = Book::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();

        return [
            'borrow_code' => Str::random(10),
            'book_id' => $book->id,
            'user_id' => $user->id,
            'status' => $this->faker->randomElement($borrowedStatus),
        ];
    }

}
