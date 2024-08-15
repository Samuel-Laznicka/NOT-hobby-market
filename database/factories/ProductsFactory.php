<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{

    public function definition(): array
    {
        $category = Categories::inRandomOrder()->first();

        if ($category->name === 'Stavební materiál') {
            $names = ['Dřevěnné trámy', 'Dřevěnné palubky', 'Dřevěnná prkna', 'Dřevěnné laťe'];
                $randomName = $names[array_rand($names)];
            $descriptions = ['Impregnované', 'Tvrdé dřevo'];
                $randomDescription = $descriptions[array_rand($descriptions)];
            $prices = [5000, 3000, 2500];
                $randomPrice = $prices[array_rand($prices)];
        
            return [
                'image' => 'resources/images/mat-clear.png',
                'name' => $randomName,
                'description' => $randomDescription,
                'price' => $randomPrice,
            ];

        } elseif ($category->name === 'Pracovní nářadí') {
            $names = ['Aku-Vrtačka', 'Stavební metr', 'Vodováha', 'Brusný stroj'];
                $randomName = $names[array_rand($names)];
            $prices = [2000, 1000, 900];
                $randomPrice = $prices[array_rand($prices)];

            return [
                'image' => 'resources/images/tools-clear.png',
                'name' => $randomName,
                'description' => 'S příslušenstvím',
                'price' => $randomPrice,
            ];
        } elseif ($category->name === 'Zahradní potřeby') {
            $names = ['Květináč', 'Semínka na sázení', 'Hlína na sázení', 'Výživové hnojivo'];
                $randomName = $names[array_rand($names)];
            $descriptions = ['Venkovní', 'Vnitřní'];
                $randomDescription = $descriptions[array_rand($descriptions)];
            $prices = [200, 500, 800];
                $randomPrice = $prices[array_rand($prices)];

            return [
                'image' => 'resources/images/garden-clear.png',
                'name' => $randomName,
                'description' => $randomDescription,
                'price' => $randomPrice,
            ];
        } elseif ($category->name === 'Decorace a nábytek') {
            $names = ['Houpací lavice', 'Sada židlí', 'Stůl', 'Koberec'];
                $randomName = $names[array_rand($names)];
            $descriptions = ['Venkovní', 'Vnitřní'];
                $randomDescription = $descriptions[array_rand($descriptions)];
            $prices = [5000, 3000, 2500];
                $randomPrice = $prices[array_rand($prices)];

            return [
                'image' => 'resources/images/decor-clear.png',
                'name' => $randomName,
                'description' => $randomDescription,
                'price' => $randomPrice,
            ];
        } else {
            return [
                'categories_id' => Categories::factory(),
                
            ];
        }
    }
}
