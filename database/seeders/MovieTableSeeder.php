<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = [
            [
                'name' => 'Spiderman No Way Home',
                'slug' => 'spiderman-no-way-home',
                'category' => 'Drama',
                'video_url' => 'htpps://www.youtube.com/watch?v=6hB359bIaco',
                'thumbnail' => 'https://radarlampung.disway.id/upload/cf20a58cc1e8ba733f48d44251402a75.jpeg',
                'rating' => 9.0,
                'is_featured' => 1
            ],
            [
                'name' => 'Avatar 2 The Way Of Water',
                'slug' => 'avatar-2-the-way-of-water',
                'category' => 'Action',
                'video_url' => 'htpps://www.youtube.com/watch?v=sY1S34973zA',
                'thumbnail' => 'https://assets.promediateknologi.com/crop/16x291:704x1093/x/photo/2022/12/26/1248437422.png',
                'rating' => 7.3,
                'is_featured' => 0
            ],
            [
                'name' => 'black Panther Wakanda Forever',
                'slug' => 'black-panther-wakanda-forever',
                'category' => 'Action',
                'video_url' => 'htpps://www.youtube.com/watch?v=6hB359bIaco',
                'thumbnail' => 'https://asset.tix.id/wp-content/uploads/2022/11/c6b9890add5c02fcf9b0bfbee9813858.jpg',
                'rating' => 9.1,
                'is_featured' => 0
            ],
        ];
        Movie::insert($movie);
    }
}
