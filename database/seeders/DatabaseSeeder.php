<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([
        //     UserSeeder::class,
        //     PostSeeder::class
        // ]);

        // Recomendable ya que PostSeeder solo tendria la ejecucion de una 
        // sola linea de codigo
        Post::factory(100)->create();
        $this->call(UserSeeder::class);
    }
}
