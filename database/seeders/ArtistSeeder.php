<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Artist;

// Helpers
use Illuminate\Support\Facades\Schema;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Artist::truncate();
        });

        for ($i = 0; $i < 25; $i++) {
            $artist = new Artist();
            $name = fake()->unique()->words(rand(2, 6), true);
            $slug = str()->slug($name);
            $artist->name = $name;
            $artist->slug = $slug;
            $artist->save();
        }
    }
}
