<?php

use Illuminate\Database\Seeder;
use App\Categs;


class CategsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $node = Categs::create([
            'title' => 'Root',
            'ident' => 'root',
            'children' => [
                [
                    'title' => 'Новости',
                    'ident' => 'news',
                    'url' => 'news'
                ],
                [
                    'title' => 'Тренерский состав',
                    'url' => 'coaches',
                    'ident' => 'coaches',
                    'children' => [
                        [
                            'title' => 'Теннисисты',
                            'url' => 'tennis',
                            'ident' => 'coaches'
                        ],
                        [
                            'title' => 'Футболисты',
                            'url' => 'football',
                            'ident' => 'coaches'
                        ],
                        [
                            'title' => 'Борцы',
                            'url' => 'fighter',
                            'ident' => 'coaches'
                        ]
                    ],
                ],
            ],
        ]);
    }
}