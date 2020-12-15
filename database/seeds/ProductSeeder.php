<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            ['catid'=>'1', 'productname'=>'Bouquet', 'productprice'=>'50000', 'productdesc'=>'bunga', 'productimg'=>'kmb.jpg'],
         ]);
    }
}
