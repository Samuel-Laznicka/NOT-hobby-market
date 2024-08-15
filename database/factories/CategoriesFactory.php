<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriesFactory extends Factory
{

    public function definition()
    {
        $categories = [
            [
                'name' => 'Stavební materiál',
                'image' => 'resources/images/mat-clear.png',
                'url' => '/shop-materials',
                'description' => 'Pro Každý Váš vysněný projekt',
            ],
            [
                'name' => 'Pracovní nářadí',
                'image' => 'resources/images/tools-clear.png',
                'url' => '/shop-tools',
                'description' => 'Aby Vám práce šla vždy od ruky',
            ],
            [
                'name' => 'Zahradní potřeby',
                'image' => 'resources/images/garden-clear.png',
                'url' => '/shop-garden',
                'description' => 'Aby Vám zahrada rostla před očima',
            ],
            [
                'name' => 'Decorace a nábytek',
                'image' => 'resources/images/decor-clear.png',
                'url' => '/shop-decor',
                'description' => 'Aby se Vám doma vždy líbilo',
            ],
        ];

        $category = $this->faker->randomElement($categories);

        return [
            'name' => $category['name'],
            'image' => $category['image'],
            'url' => $category['url'],
            'description' => $category['description'],
        ];
    }  
}
