<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $xp = 100;
        
        for($i = 0; $i < 10; $i++){
            $xp = $xp * 2;

            DB::table('levels')->insert([
                "xp" => $xp
            ]);
        }
    }
}
