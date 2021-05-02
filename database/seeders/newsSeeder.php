<?php

namespace Database\Seeders;

use App\Models\news;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class newsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('news')->insert([


            'headline'=>Str::random(50),
            'description'=>Str::random(150),
            'type'=>Str::random(50),
            'picture'=>Str::random(20)
        ]);
    }
}
