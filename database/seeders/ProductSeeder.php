<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name'        => 'Boost Energy Drink 1kg',
                'description' => 'High performance malt-based energy drink with 3x more stamina, clinically proven for active individuals.',
                'price'       => 24.99,
                'stock'       => 50,
                'image'       => null,
            ],
            [
                'name'        => 'Philips 43" 4K Smart TV',
                'description' => 'Ultra HD Smart TV with a vibrant display, built-in apps, and crisp 4K resolution for an immersive viewing experience.',
                'price'       => 399.99,
                'stock'       => 12,
                'image'       => null,
            ],
            [
                'name'        => 'iPhone 14 128GB',
                'description' => 'Apple iPhone 14 with A15 Bionic chip, advanced dual-camera system, and all-day battery life. Available in Blue.',
                'price'       => 899.99,
                'stock'       => 25,
                'image'       => null,
            ],
            [
                'name'        => 'Sony WH-1000XM5 Headphones',
                'description' => 'Industry-leading noise cancelling with two processors and eight microphones. Up to 30 hours battery life.',
                'price'       => 349.99,
                'stock'       => 18,
                'image'       => null,
            ],
            [
                'name'        => 'Nike Air Max 270',
                'description' => 'Inspired by two icons of big Air: the Air Max 180 and Air Max 93. Comfortable everyday sneaker.',
                'price'       => 149.99,
                'stock'       => 40,
                'image'       => null,
            ],
            [
                'name'        => 'Mechanical Keyboard TKL',
                'description' => 'Tenkeyless mechanical keyboard with Cherry MX switches. RGB backlit, compact and durable design.',
                'price'       => 89.99,
                'stock'       => 30,
                'image'       => null,
            ],
            [
                'name'        => 'Instant Pot Duo 7-in-1',
                'description' => 'Pressure cooker, slow cooker, rice cooker, steamer, sauté pan and more. 6 quart capacity.',
                'price'       => 79.99,
                'stock'       => 22,
                'image'       => null,
            ],
            [
                'name'        => 'Dyson V15 Detect Vacuum',
                'description' => 'Laser reveals microscopic dust on hard floors. Automatically adapts suction power to different surfaces.',
                'price'       => 749.99,
                'stock'       => 8,
                'image'       => null,
            ],
            [
                'name'        => 'Kindle Paperwhite 16GB',
                'description' => 'The thinnest, lightest Kindle Paperwhite yet — with a flush-front design and 300 ppi glare-free display.',
                'price'       => 139.99,
                'stock'       => 35,
                'image'       => null,
            ],
            [
                'name'        => 'LEGO Technic 42154',
                'description' => 'Build and display the iconic 2022 Ford GT with this detailed LEGO Technic model. 1,466 pieces.',
                'price'       => 119.99,
                'stock'       => 15,
                'image'       => null,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
