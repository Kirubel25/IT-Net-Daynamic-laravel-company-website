<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait DisableForignKey
{
    public function disableForignKeys(){
        DB::statement("SET FOREIGN_KEY_CHECKS=0");
    }
    public function enableForignKeys(){
        DB::statement("SET FOREIGN_KEY_CHECKS=1");
    }
}
