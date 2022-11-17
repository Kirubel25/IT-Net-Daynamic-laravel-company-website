<?php

namespace Database\Seeders;

use App\Models\HomeSlide;
use Database\Seeders\Traits\DisableForignKey;
use Database\Seeders\Traits\TruncateTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSlideSeeder extends Seeder
{
    use DisableForignKey,TruncateTrait;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForignKeys();
        $this->truncate('home_slides');
        $this->enableForignKeys();
        HomeSlide::factory(1)->create();
    }
}
