<?php

use Illuminate\Database\Seeder;
use App\Shop;
class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::insert([

            [

                'name'=>'a',
                'description'=>'aaa',
                'password'=>'bbbb',
                'email'=>'algo@algo.com',
                'likes'=> 1

            ],
            [

                'name'=>'b',
                'description'=>'aaa',
                'password'=>'bbbb',
                'email'=>'algo@algo.com',
                'likes'=> 1

            ],
            [

                'name'=>'c',
                'description'=>'aaa',
                'password'=>'bbbb',
                'email'=>'algo@algo.com',
                'likes'=> 1

            ]

       ]);
    }
}
