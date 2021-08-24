<?php

namespace Database\Seeders;
use App\Models\Obra;
use Illuminate\Database\Seeder;

class ObrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Obra::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few obras in our database:
        for ($i = 0; $i < 50; $i++) {
            Obra::create([
                'titulo' => $faker->sentence,
                'descripcion' => $faker->paragraph,
                'nombre_archivo' => $faker->sentence,
            ]);
        }
    }
}
