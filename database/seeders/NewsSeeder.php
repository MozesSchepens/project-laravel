<?php
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run()
    {
        News::create([
            'title' => 'Phil Foden named Premier League Player of the Season',
            'content' => 'Phil Foden has been named the Premier League Player of the Season for his outstanding performances throughout the campaign...',
            'image' => 'pots.png',
        ]);

        News::create([
            'title' => 'Manchester City announces new stadium expansion',
            'content' => 'Manchester City has announced plans to expand the Etihad Stadium...',
            'image' => 'stadium.png',
        ]);
    }
}
