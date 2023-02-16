<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Energy Drink',
            'Orange Juice',
            'Strawbery Juice',
            'Pineapple juice',
            'Avocado juice',
            'Lemonade',
            'Peach juice',
            'Mango juice',
            'Spinach juice',
            'Mix juice',
        ];
        $des = [
            'Allow you to top up your energy,drink it!',
            'A juicy refreshing of orange with pulp!',
            'A juicy refreshing of strawberry condensed',
            'A very cold drink with a light digestion, perfect for athletic',
            'The perfect drink for those who love exotic flavours',
            'A classic refreshing lemonade, perfect for summer!',
            'The super delicious peach juice, our superstar!',
            'Pure tropical flavor, perfect for preparing fresh and very tasty shakes',
            'A interesting juice with a rare savour',
            'The best combination of flavour. Do you know the fruits of the juice?',
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
            5
        ];
        $stocks = [
            10,
            25,
            15,
            25,
            10,
            50,
            30,
            10,
            10,
            30
        ];

        for ($i = 0; $i < 10; $i++) {
            $product = new Product;
            $product->name = $names[$i];
            $product->description = $des[$i];
            $product->price = $prices[$i];
            $product->stock = $stocks[$i];
            $product->save();
        }
    }
}
