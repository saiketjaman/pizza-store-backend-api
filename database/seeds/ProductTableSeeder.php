<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$products = [
    		[
    			'title' => "Salami Pizza",
    			'description' => "With Spicy Sweet Sour Sauce, Tuna, Crabsticks, Pineapples, Capsicums, Onions, Mozzarella Cheese.",
    			'price' => 100.10,
    			'image' => "https://png.pngitem.com/pimgs/s/106-1066280_taco-pizza-pizza-ranch-taco-pizza-hd-png.png"
    		],
    		[
    			'title' => "Homemade Pizza",
    			'description' => "With Tomato Sauce, Chicken Meat, Chicken Salami, Chicken Loaf, Mushrooms, Capsicums, Onions, Mozzarella Cheese, Tomatoes.",
    			'price' => 13.90,
    			'image' => "https://png.pngitem.com/pimgs/s/528-5287435_boston-pizza-tropical-chicken-pizza-hd-png-download.png"
    		],
    		[
    			'title' => "Cheese Pizza",
    			'description' => "With Tomato Sauce, Chicken Meat, Chicken Loaf, Pineapples, Mozzarella Cheese.",
    			'price' => 378.00,
    			'image' => "https://png.pngitem.com/pimgs/s/367-3671735_apple-fruit-dessert-pizza-pizza-ranch-cinnamon-dessert.png"
    		],
    		[
    			'title' => "Seafood Pizza with Cheese",
    			'description' => "With Tomato Sauce, Beef Pepperoni, Mozzarella Cheese.",
    			'price' => 21.10,
    			'image' => "https://png.pngitem.com/pimgs/s/106-1066280_taco-pizza-pizza-ranch-taco-pizza-hd-png.png"
			],
			[
    			'title' => "Beef Pepperoni",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'price' => 21.10,
    			'image' => "https://png.pngitem.com/pimgs/s/3-32704_pepperoni-pizza-transparent-png-png-download.png"
			],
			[
    			'title' => "Chicken Delight",
    			'description' => "With Bbq Sauce, Chicken Meat, Mushrooms, Onions, Mozzarella Cheese.",
    			'price' => 31.10,
    			'image' => "https://png.pngitem.com/pimgs/s/528-5287435_boston-pizza-tropical-chicken-pizza-hd-png-download.png"
			],
			[
    			'title' => "Chicken Pepperoni",
    			'description' => "With Tomato Sauce, Chicken Pepperoni, Mozzarella Cheese.",
    			'price' => 28.10,
    			'image' => "https://png.pngitem.com/pimgs/s/3-33505_pizza-png-download-image-chicken-pepperoni-pizza-transparent.png"
			],
			[
    			'title' => "Island Tuna",
    			'description' => "With Thousand Island Sauce, Tuna, Pineapples, Onions, Mozzarella Cheese.",
    			'price' => 29.10,
    			'image' => "https://png.pngitem.com/pimgs/s/3-33677_large-pizza-with-tomatoes-pizza-images-hd-png.png"
    		]
    	];

    	foreach ($products as $product) {
    		Product::create($product);
    	}

    }
}
