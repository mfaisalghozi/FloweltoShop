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
            ['catid'=>'1', 'productname'=>'HBouquet', 'productprice'=>'10000', 'productdesc'=>'bunga', 'productimg'=>'hb1.jpg'],
            ['catid'=>'1', 'productname'=>'HBouquet 2', 'productprice'=>'20000', 'productdesc'=>'bunga 2', 'productimg'=>'hb2.jpg'],
            ['catid'=>'1', 'productname'=>'HBouquet 3', 'productprice'=>'30000', 'productdesc'=>'bunga 3', 'productimg'=>'hb3.jpg'],
            ['catid'=>'1', 'productname'=>'HBouquet 4', 'productprice'=>'40000', 'productdesc'=>'bunga 4', 'productimg'=>'hb4.jpg'],
            ['catid'=>'1', 'productname'=>'HBouquet 5', 'productprice'=>'50000', 'productdesc'=>'bunga 5', 'productimg'=>'hb5.jpg'],
            ['catid'=>'1', 'productname'=>'HBouquet 6', 'productprice'=>'60000', 'productdesc'=>'bunga 6', 'productimg'=>'hb6.jpg'],
            ['catid'=>'1', 'productname'=>'HBouquet 7', 'productprice'=>'40000', 'productdesc'=>'bunga 4', 'productimg'=>'hb4.jpg'],
            ['catid'=>'1', 'productname'=>'HBouquet 8', 'productprice'=>'50000', 'productdesc'=>'bunga 5', 'productimg'=>'hb5.jpg'],
            ['catid'=>'1', 'productname'=>'HBouquet 9', 'productprice'=>'60000', 'productdesc'=>'bunga 6', 'productimg'=>'hb6.jpg'],
         ]);
    }
}
