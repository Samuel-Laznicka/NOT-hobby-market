<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $categories = Categories::all();

        foreach ($categories as $category) {
            for ($i = 0; $i < 4; $i++) {
                $productName = '';
                $productDescription = '';
                $productPrice = 0.0;
                $productimage = '';

        if ($category->id == 1) {
            $names = ['Dřevěnné trámy', 'Dřevěnné palubky', 'Dřevěnná prkna', 'Dřevěnné laťe'];
                $randomName = $names[array_rand($names)];
            $descriptions = ['Impregnované', 'Tvrdé dřevo'];
                $randomDescription = $descriptions[array_rand($descriptions)];
            $prices = [5000, 3000, 2500];
                $randomPrice = $prices[array_rand($prices)];
        
            $productimage = 'resources/images/mat-clear.png';
            $productName = $randomName;
            $productDescription = $randomDescription;
            $productPrice = $randomPrice;
        }
        elseif ($category->id == 2) 
        {
            $names = ['Aku-Vrtačka', 'Stavební metr', 'Vodováha', 'Brusný stroj'];
                $randomName = $names[array_rand($names)];
            $prices = [2000, 1000, 900];
                $randomPrice = $prices[array_rand($prices)];

            $productimage = 'resources/images/tools-clear.png';
            $productName = $randomName;
            $productDescription = 'S násadami';
            $productPrice = $randomPrice;
        }
        elseif ($category->id == 3) 
        {
            $names = ['Květináč', 'Semínka na sázení', 'Hlína na sázení', 'Výživové hnojivo'];
                $randomName = $names[array_rand($names)];
            $descriptions = ['Venkovní', 'Vnitřní'];
                $randomDescription = $descriptions[array_rand($descriptions)];
            $prices = [200, 500, 800];
                $randomPrice = $prices[array_rand($prices)];

            $productimage = 'resources/images/garden-clear.png';
            $productName = $randomName;
            $productDescription = $randomDescription;
            $productPrice = $randomPrice;
        }
        elseif ($category->id == 4) 
        {  
            $names = ['Houpací lavice', 'Sada židlí', 'Stůl', 'Koberec'];
                $randomName = $names[array_rand($names)];
            $descriptions = ['Venkovní', 'Vnitřní'];
                $randomDescription = $descriptions[array_rand($descriptions)];
            $prices = [5000, 3000, 2500];
                $randomPrice = $prices[array_rand($prices)];

            $productimage = 'resources/images/decor-clear.png';
            $productName = $randomName;
            $productDescription = $randomDescription;
            $productPrice = $randomPrice;
        }

        Products::factory()->create([
            'image' => $productimage,
            'category_id' => $category->id,
            'name' => $productName,
            'description' => $productDescription,
            'price' => $productPrice,
        ]);
    }
}
    }
}
