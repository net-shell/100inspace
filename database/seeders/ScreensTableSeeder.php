<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Screen;

class ScreensTableSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        Screen::firstOrCreate([
            'title' => 'About Enpulsion',
        ]);
        Screen::firstOrCreate([
            'title' => 'Behind 100in.SPACE',
        ]);
        Screen::firstOrCreate([
            'title' => 'The Past',
        ]);
        Screen::firstOrCreate([
            'title' => 'The Present',
        ]);
        Screen::firstOrCreate([
            'title' => 'The Future',
        ]);
    }
}
