<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Album;
use App\Models\Genre;

class AlbumGenreRelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $albums = Album::all();

        foreach ($albums as $album) {
            $genres = Genre::inRandomOrder()->get();
            
            $counter = 0;
            $maxGenres = rand(0, 3);
            foreach ($genres as $genre) {
                if ($counter < $maxGenres) {
                    $album->genres()->attach($genre->id);
                    $counter++;
                }
                else {
                    break;
                }
            }
        }
    }
}
