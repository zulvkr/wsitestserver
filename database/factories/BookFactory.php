<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
  protected $model = Book::class;

  /**
   * Define the model's default state.
   *php artisan make:seeder UserSeeder
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'kode_buku' => $this->faker->unique()->ean13,
      'judul_buku' => $this->faker->sentence,
      'tahun_terbit' => $this->faker->year,
      'nama_penerbit' => $this->faker->company,
      'nama_pengarang' => $this->faker->name,
    ];
  }
}
