<?php

namespace Database\Seeders;
use App\Models\Libro;
use Illuminate\Database\Seeder;

class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libro::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few libros in our database:
        for ($i = 0; $i < 50; $i++) {
            Libro::create([
                'nombre' => $faker->sentence,
                'autor' => $faker->sentence,
            ]);
        }
    }
}
