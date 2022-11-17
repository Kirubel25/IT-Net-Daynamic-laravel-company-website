<?php

namespace Database\Seeders;

use App\Models\About;
use Database\Seeders\Traits\DisableForignKey;
use Database\Seeders\Traits\TruncateTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbouteSeeder extends Seeder
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
        $this->truncate('abouts');
        $this->enableForignKeys();
        About::factory(1)->create();
        // \App\Models\HomeSlide::factory(3)->create();
    }
}
