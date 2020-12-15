<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['catname'=>'Hand Bouquet', 'catimg'=>'/image/hb.jpg'],
            ['catname'=>'Wedding Bouquet', 'catimg'=>'/image/wb.jpg'],
            ['catname'=>'Rose Bouquet', 'catimg'=>'/image/rb.jpg'],
            ['catname'=>'Sunflower Bouquet', 'catimg'=>'/image/sf.jpg'],
        ]);
    }
}
