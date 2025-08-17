<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Hard to miss Ser',
                'description' => 'Sergio my guy',
                'date' => now(),
            ],
            [
                'title' => 'Hard to miss Bashar',
                'description' => 'Bashar Al Assad jr',
                'date' => now(),
            ],
            [
                'title' => 'Hard to miss Apsilon',
                'description' => 'Born and bred Berliner artist, his rap is a mix of German and Turkish influences',
                'date' => now(),
            ],
            [
                'title' => 'Hard to miss Skepta',
                'description' => 'Nigerian MC and Grime artist',
                'date' => now(),
            ],
            [
                'title' => 'Hard to miss Celeste',
                'description' => 'Upcoming, shining doing her thing in style, mentality and goals. Di Nero is di shit.',
                'date' => now(),
            ],
            [
                'title' => 'Hard to miss Milo',
                'description' => 'Milo makes it work. What can we say. Heb je leren pijpen?',
                'date' => now(),
            ],
            [
                'title' => 'Hard to miss Richmond',
                'description' => 'Richy is going strong and thriving. Hotter than your father, hide ya wife',
                'date' => now(),
            ],
            [
                'title' => 'Hard to miss Zaïra',
                'description' => 'She can do everything, cooks the nicest eggs and has the kindest heart',
                'date' => now(),
            ],
        ];

        foreach ($articles as $data) {
            Article::create($data);
        }
    }
}
