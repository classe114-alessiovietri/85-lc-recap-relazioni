<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Genre;

// Helpers
use Illuminate\Support\Facades\Schema;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Genre::truncate();
        });

        for ($i = 0; $i < 10; $i++) {
            $genre = new Genre();
            $name = fake()->unique()->word();
            $slug = str()->slug($name);
            $genre->name = $name;
            $genre->slug = $slug;
            $genre->save();
        }
    }
}
