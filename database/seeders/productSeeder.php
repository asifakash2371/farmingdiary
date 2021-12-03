<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' =>'Blonde D-Aquitaine' ,
                'price' =>"300000",
                'description' =>"The Blonde d'Aquitaine is a modern French breed of large domestic beef cattle. It was created in 1962 by merging three blonde draught breeds of south-western France, the Blonde des Pyrénées, the Blonde de Quercy and the Garonnaise.",
                'category'=>"Cow",
                'gallery'=>"https://upload.wikimedia.org/wikipedia/commons/c/c0/WhiteBull.jpg"
            ],
            [
                'name' =>'Thailand jasmine rice' ,
                'price' =>"300 pkg",
                'description' =>"The Thai Rice Exporters Association on Friday announced that Thailand's jasmine rice 105 variety has been named the world's best-tasting rice this year at the 12th Rice Trader World Rice Conference 2020 in the United States",
                'category'=>"Rice",
                'gallery'=>"https://importfood.com/media/zoo/images/2021-jasmine-10lb-large_614240017622726997294c04bb99c391.jpg"
            ],
            [
                'name' =>'Boer goat' ,
                'price' =>"80000",
                'description' =>"The Boer goat is a breed of goat that was developed in South Africa in the early 1900s and is a popular breed for meat production. Their name is derived from the Afrikaans word boer, meaning farmer.",
                'category'=>"Goat",
                'gallery'=>"https://upload.wikimedia.org/wikipedia/commons/9/90/Boerbok.jpg"
            ],
            [
                'name' =>'Rui Fish' ,
                'price' =>"250 pkg",
                'description' =>"The rohu is a large, silver-colored fish of typical cyprinid shape, with a conspicuously arched head. Adults can reach a maximum weight of 45 kg (99 lb) and maximum length of 2 m (6.6 ft),[2] but average around 1⁄2 m (1.6 ft).",
                'category'=>"Fish",
                'gallery'=>"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Labeo_rohita.JPG/1280px-Labeo_rohita.JPG"
            ]
        ]);
}
}
