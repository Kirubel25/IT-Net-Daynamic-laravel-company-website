<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait TruncateTrait
{
    public function truncate($table){
        DB::table($table)->truncate();
    }
}
