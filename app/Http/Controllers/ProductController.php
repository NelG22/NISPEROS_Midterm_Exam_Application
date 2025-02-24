<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Chicken Adobo',
                'description' => 'Classic Filipino dish of chicken marinated in vinegar, soy sauce, and garlic',
                'price' => 180.00,
                'category' => 'Main Dish',
                'image' => 'https://deliciouslyrushed.com/wp-content/uploads/2023/11/chicken-adobo-feature-image.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Sinigang na Baboy',
                'description' => 'Sour soup with pork, vegetables, and tamarind base',
                'price' => 200.00,
                'category' => 'Soup',
                'image' => 'https://iankewks.com/wp-content/uploads/2024/10/IMG_8605-500x500.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Pancit Bihon',
                'description' => 'Stir-fried rice noodles with vegetables and meat',
                'price' => 150.00,
                'category' => 'Noodles',
                'image' => 'https://chickenfriedkitchen.com/wp-content/uploads/2022/06/Pancit-Bihon-1.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Halo-Halo',
                'description' => 'Mixed dessert with shaved ice, sweet beans, fruits, and ice cream',
                'price' => 120.00,
                'category' => 'Dessert',
                'image' => 'https://www.foodandwine.com/thmb/oybMSWdgpwqYxBW9EFSdIUmf57U=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/halo-halo-FT-RECIPE0924-28931a658de3439d9719f83d5a6dfc2c.jpeg'
            ],
            [
                'id' => 5,
                'name' => 'Crispy Pata',
                'description' => 'Deep-fried pork knuckles served with soy-vinegar dip',
                'price' => 450.00,
                'category' => 'Main Dish',
                'image' => 'https://www.foxyfolksy.com/wp-content/uploads/2019/12/crispy-pata-640.jpg'
            ],
            [
                'id' => 6,
                'name' => 'Kare-Kare',
                'description' => 'Rich peanut stew with oxtail, tripe, and vegetables served with bagoong',
                'price' => 350.00,
                'category' => 'Main Dish',
                'image' => 'https://www.maggi.ph/sites/default/files/styles/home_stage_944_531/public/srh_recipes/3eb553f39b3c0d978fbb90169fb3d6a5.jpg?h=78aab1d8&itok=Bogzo-Mq'
            ],
            [
                'id' => 7,
                'name' => 'Leche Flan',
                'description' => 'Creamy Filipino caramel custard made with egg yolks and milk',
                'price' => 90.00,
                'category' => 'Dessert',
                'image' => 'https://bitesbybianca.com/wp-content/uploads/2022/02/bear-leche-flan-1.jpg'
            ],
            [
                'id' => 8,
                'name' => 'Sisig',
                'description' => 'Sizzling chopped pork face and ears with calamansi and chili',
                'price' => 220.00,
                'category' => 'Main Dish',
                'image' => 'https://www.unileverfoodsolutions.com.ph/dam/global-ufs/mcos/SEA/calcmenu/recipes/PH-recipes/appetisers/sizzling-pork-sisig-manila/sizzling-pork-sisig-manila-main.jpg'
            ]
        ];
        return view('products.index', compact('products'));
    }
}

