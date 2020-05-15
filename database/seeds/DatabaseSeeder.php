<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
//use App\Models\Cart;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'name' => 'Basic faded sweatshirt',
                'price' => '25.99',
                'image' => '1.jpg',
                'top9' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'Basic mustard yellow sweatshirt"',
                'price' => '22.99',
                'image' => '2.jpg',
                'top9' => 1,
            ]
        );  
        Product::create(
            [
                'name' => 'Basic round neck sweatshirt',
                'price' => '7.99',
                'image' => '3.jpg',
                'top9' => 1,
            ]
        );         
        Product::create(
            [
                'name' => 'Basic stripe print sweatshirt',
                'price' => '23.99',
                'image' => '4.jpg',
                'top9' => 1,
            ]
        );      
        Product::create(
            [
                'name' => 'Basic sweatshirt',
                'price' => '9.99',
                'image' => '5.jpg',
                'top9' => 1,
            ]
        );                   
        Product::create(
            [
                'name' => 'Elasticated sweatshirt',
                'price' => '13.99',
                'image' => '6.jpg',
                'top9' => 1,
            ]
        );                   
        Product::create(
            [
                'name' => 'Pink hoodie with illustration',
                'price' => '6.99',
                'image' => '7.jpg',
                'top9' => 1,
            ]
        );      
        Product::create(
            [
                'name' => 'Red colour block hoodie',
                'price' => '6.99',
                'image' => '8.jpg',
                'top9' => 1,
            ]
        );    
        Product::create(
            [
                'name' => 'Sweatshirt with long puff sleeves',
                'price' => '6.99',
                'image' => '9.jpg',
                'top9' => 1,
            ]
        );             
        Product::create(
            [
                'name' => 'Пальто "Gold"',
                'price' => '38.99',
                'image' => 'product_10.jpg',
                'top9' => 0,
            ]
        );    
        Product::create(
            [
                'name' => 'Топ "London"',
                'price' => '10.99',
                'image' => 'product_11.jpg',
                'top9' => 0,
            ]
        );      
        Product::create(
            [
                'name' => 'Костюм "Корса"',
                'price' => '29.99',
                'image' => 'product_12.jpg',
                'top9' => 0,
            ]
        );      
        Product::create(
            [
                'name' => 'Блуза "Sunny Style"',
                'price' => '11.99',
                'image' => 'product_13.jpg',
                'top9' => 0,
            ]
        );      
        Product::create(
            [
                'name' => 'Батник "California"',
                'price' => '8.99',
                'image' => 'product_14.jpg',
                'top9' => 0,
            ]
        );         
        Product::create(
            [
                'name' => 'Платье "Лиза"',
                'price' => '15.99',
                'image' => 'product_15.jpg',
                'top9' => 0,
            ]
        );       
        Product::create(
            [
                'name' => 'Платье "Пирамида"',
                'price' => '21.99',
                'image' => 'product_16.jpg',
                'top9' => 0,
            ]
        );       
        Product::create(
            [
                'name' => 'Плащ "LightBlue"',
                'price' => '29.99',
                'image' => 'product_17.jpg',
                'top9' => 0,
            ]
        );            
    }
}
