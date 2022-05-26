<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        DB::table('products')->insert([
            [
                'name'=>'On The Go Mini Dress - Black',  
                "price"=>"$12.00",
                "category"=> "Dresses",
                "description"=>"Available In Black, White, And Red. Ribbed Mini Dress, Sleeveless, Double Square Neck",
                "gallery"=> "https://cdn.shopify.com/s/files/1/0293/9277/products/08-18-21Studio2_MS_RB_10-00-24_8_RD44073_Black_P_11780_KL_468x.jpg?v=1638991369"
            ],
            [
                'name'=>'The Big Picture Cargo Jogger Jeans - White/Blue',  
                "price"=>"$44.99",
                "category"=> "Jeans",
                "description"=>"Available In White/Blue. Jogger Jean, Non Stretch Denim, Utility Cargo Pockets",
                "gallery"=> "https://cdn.shopify.com/s/files/1/0293/9277/products/04-06-22Studio4_CE_RL_10-55-50_7_NP2025_WhiteBlue_1628_EH_468x.jpg?v=1649440275"
            ],
            [   
                'name'=>'Go With It Pant Set - Multi Color',  
                "price"=>"$27.99",
                "category"=> "Matching Sets",
                "description"=>"Available In Multi Color. Pant Set, Bandeau Top, Tie Front",
                "gallery"=> "https://cdn.shopify.com/s/files/1/0293/9277/products/03-09-21Studio2_SN_SD_11-55-49_11_ST5896_MultiColor_21400_WG_468x.jpg?v=1615331517"
            ],
            [
                'name'=>'Sylvie Crop Top - White',  
                "price"=>"$20.99",
                "category"=> "Tops",
                "description"=>"Available In White. Collared Crop Top, Short Sleeve, Cuffed Sleeve",
                "gallery"=> "https://cdn.shopify.com/s/files/1/0293/9277/products/03-18-22Studio1_ME_KG_09-13-32_8_HF22E288_White_2898_MH_468x.jpg?v=1648234108"
            ],
            [
                'name'=>'Sasha Wide Leg Pant - Taupe',  
                "price"=>"$20.99",
                "category"=> "Bottoms",
                "description"=>"Available In Taupe. Wide Leg Pants, High Waist, Pull On",
                "gallery"=> "https://cdn.shopify.com/s/files/1/0293/9277/products/04-29-22Studio4_ME_CP__14-40-29_8_V24469_Taupe_21512_EH_468x.jpg?v=1651789316"
            ],
            
        
        ]);
    }
}
