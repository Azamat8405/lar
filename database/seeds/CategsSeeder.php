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
                    'ident' => 'news'
                ],
            ],
        ]);

    }
}
