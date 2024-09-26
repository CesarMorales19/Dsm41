<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de que esto esté correcto
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        // Crear una instancia de Faker
        $faker = Factory::create();

        // Generar 50 posts ficticios
        foreach (range(1, 50) as $index) {
            DB::table('posts')->insert([ // Cambia [ a ->insert([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
            ]);
        }
    }
}
