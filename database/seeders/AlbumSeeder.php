<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Album;
use App\Models\Artist;

// Helpers
use Illuminate\Support\Facades\Schema;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Album::truncate();
        });

        for ($i = 0; $i < 50; $i++) {
            $album = new Album();
            $name = fake()->unique()->words(rand(1, 5), true);
            $slug = str()->slug($name);
            $album->name = $name;
            $album->slug = $slug;
            $published = fake()->boolean(60);
            if ($published) {
                $album->published_at = now();
            }
            $withArtist = fake()->boolean(75);
            if ($withArtist) {
                $randomArtist = Artist::inRandomOrder()->first();
                if ($randomArtist != null) {
                    $album->artist_id = $randomArtist->id;
                }
            }
            $album->save();
        }
    }
}
