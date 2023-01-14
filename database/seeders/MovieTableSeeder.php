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
                'category' => 'Action',
                'video_url' => 'htpps://www.youtube.com/watch?v=6hB359bIaco',
                'thumbnail' => 'https://radarlampung.disway.id/upload/cf20a58cc1e8ba733f48d44251402a75.jpeg',
                'rating' => 4.0,
                'is_featured' => 1
            ],
            [
                'name' => 'Avatar 2 The Way Of Water',
                'slug' => 'avatar-2-the-way-of-water',
                'category' => 'Action',
                'video_url' => 'htpps://www.youtube.com/watch?v=sY1S34973zA',
                'thumbnail' => 'https://assets.promediateknologi.com/crop/16x291:704x1093/x/photo/2022/12/26/1248437422.png',
                'rating' => 4.3,
                'is_featured' => 0
            ],
            [
                'name' => 'Black Panther Wakanda Forever',
                'slug' => 'black-panther-wakanda-forever',
                'category' => 'Action',
                'video_url' => 'htpps://www.youtube.com/watch?v=6hB359bIaco',
                'thumbnail' => 'https://asset.tix.id/wp-content/uploads/2022/11/c6b9890add5c02fcf9b0bfbee9813858.jpg',
                'rating' => 4.1,
                'is_featured' => 0
            ],
            [
                'name' => 'Black Adam',
                'slug' => 'black-adam',
                'category' => 'Action',
                'video_url' => 'htpps://www.youtube.com/watch?v=6hB359bIaco',
                'thumbnail' => 'https://assets-a1.kompasiana.com/items/album/2022/10/20/mv5byzzkoguwmzmtmtgyns00yjflltg5nzytzte3y2e5yta5nwiyxkeyxkfqcgdeqxvymjkwotaymduat-v1-6350c4ad08a8b5426664ccf4.jpg?t=o&v=780',
                'rating' => 3.9,
                'is_featured' => 0
            ],
            [
                'name' => 'Jungle',
                'slug' => 'jungle',
                'category' => 'Action',
                'video_url' => 'htpps://www.youtube.com/watch?v=6hB359bIaco',
                'thumbnail' => 'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1611811643/xhzlq8fnjz4f5t33qr4o.png',
                'rating' => 3.9,
                'is_featured' => 1
            ],
        ];
        Movie::insert($movie);
    }
}
