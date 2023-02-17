<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $names = [
            "Energy Drink", 
            "Orange Juice",
            "Strawberry Juice",
            "Pineapple Juice",
            "Avocado Juice",
            'Lemonade',
            'Peach juice',
            'Mango juice',
            'Spinach juice',
            'Mix juice'
        ];

        $description = [
            "Allow you to top up your energy,drink it", 
            "A juicy refresing of orange with pulp!",
            "A juicy refreshing of strawbary condensed",
            "A very cold drink with a light disgestion, perfect for athletic",
            "The perfect drink for those who love exotic flavours",
            "A classic refreshing lemonade, perfect for summer!",
            "The super delicious peach juice, our superstar!",
            "Pure tropical flavor, perfect for preparing fresh and very tasty shakes",
            "A interesting juice with a rare savour",
            "The best combination of flavour. Do you know the fruits of the juice?"
        ];

        $prices = [
            3.75, 
            2.5,
            4,
            3,
            4,
            2.5,
            5,
            3.5,
            3,
            5,
        ];

        $stock = [
            10, 
            25,
            15,
            25,
            10,
            50,
            30,
            10,
            10,
            30,
        ];

        
        $product = new Product();

        $product->name = "";
        $product->description = "";
        $product->price= ;
        $product->stock= ;

        //
    }


}
