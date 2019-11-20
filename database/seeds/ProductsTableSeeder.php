<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Product::insert([

            [

                'name'=>'uno',
                'description'=>'aaa',
                'stock'=>5,
                'price'=> 10.30,
                'shop_id'=>1,

            ],
            [

                'name'=>'dos',
                'description'=>'aaa',
                'stock'=>5,
                'price'=> 10.30,
                'shop_id'=>1,

            ],
            [

                'name'=>'tres',
                'description'=>'aaa',
                'stock'=>5,
                'price'=> 10.30,
                'shop_id'=>2,

            ],
            [

                'name'=>'cuatro',
                'description'=>'aaa',
                'stock'=>5,
                'price'=> 10.30,
                'shop_id'=>2

            ],
            [

                'name'=>'conco',
                'description'=>'aaa',
                'stock'=>5,
                'price'=> 10.30,
                'shop_id'=>2,

            ],
            [

                'name'=>'seis',
                'description'=>'aaa',
                'stock'=>5,
                'price'=> 10.30,
                'shop_id'=>2,

            ],
            [

                'name'=>'siete',
                'description'=>'aaa',
                'stock'=>5,
                'price'=> 10.30,
                'shop_id'=>2,

            ],
            [

                'name'=>'ocho',
                'description'=>'aaa',
                'stock'=>5,
                'price'=> 10.30,
                'shop_id'=>3,

            ],
            [

                'name'=>'nueve',
                'description'=>'aaa',
                'stock'=>5,
                'price'=> 10.30,
                'shop_id'=>3,


            ],
            [

                'name'=>'diez',
                'description'=>'aaa',
                'stock'=>5,
                'price'=> 10.30,
                'shop_id'=>3,

            ]


       ]);


     
    }
}
