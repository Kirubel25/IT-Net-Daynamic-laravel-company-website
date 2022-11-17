<?php

namespace Database\Seeders;

use App\Models\Footer;
use Database\Seeders\Traits\DisableForignKey;
use Database\Seeders\Traits\TruncateTrait;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    use DisableForignKey,TruncateTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForignKeys();
        $this->truncate('footers');
        $this->enableForignKeys();
        Footer::factory(1)->create();
    }
}
