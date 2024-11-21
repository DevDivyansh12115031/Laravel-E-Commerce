<?php

namespace Database\Seeders;

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
        $products = [
            [
                'name' => 'Oppo mobile',
                'price' => '30000',
                'description' => 'A smartphone with 8GB RAM and much more feature',
                'category' => 'mobile',
                'gallery' => 'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png',
            ],
            [
                'name' => 'Panasonic Tv',
                'price' => '40000',
                'description' => 'A smart TV with much more feature',
                'category' => 'tv',
                'gallery' => 'https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg',
            ],
            [
                'name' => 'Soni Tv',
                'price' => '50000',
                'description' => 'A TV with much more feature',
                'category' => 'tv',
                'gallery' => 'https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png',
            ],
            [
                'name' => 'Samsung Galaxy A14',
                'price' => '35000',
                'description' => 'A smartphone with advanced features and 6GB RAM',
                'category' => 'mobile',
                'gallery' => 'https://mobilepriceall.com/wp-content/uploads/2022/07/Samsung-Galaxy-A13.jpg',
            ],
            [
                'name' => 'Apple iPhone 13',
                'price' => '90000',
                'description' => 'A premium smartphone with advanced features and performance',
                'category' => 'mobile',
                'gallery' => 'https://www.apple.com/newsroom/images/product/iphone/standard/Apple_iphone13_colors_09142021_big.jpg.large.jpg',
            ],
            [
                'name' => 'Sony Bravia 55 Inch',
                'price' => '70000',
                'description' => 'A 55-inch 4K UHD smart TV with exceptional picture quality',
                'category' => 'tv',
                'gallery' => 'https://cdn1.smartprix.com/rx-iTNTYhy9P-w420-h420/sony-bravia-x75l-55.jpg',
            ],
            [
                'name' => 'Lenovo Yoga 7i Laptop',
                'price' => '80000',
                'description' => 'A 2-in-1 convertible laptop with Intel Core i7 processor',
                'category' => 'laptop',
                'gallery' => 'https://p4-ofp.static.pub/ShareResource/na/subseries/gallery/lenovo-yoga-7i-gen7-16inch-01.png',
            ],
            [
                'name' => 'HP Spectre x360',
                'price' => '11000',
                'description' => 'A stylish 2-in-1 laptop with top-tier performance',
                'category' => 'laptop',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOsm0H0AKLmmLYNUw5o_wa3O8fobjCaISo0Q&s',
            ],
            [
                'name' => 'Samsung Galaxy Watch 4',
                'price' => '2500',
                'description' => 'A smartwatch with fitness tracking, ECG, and more',
                'category' => 'wearable',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP8TB1Ic_bsJS7yXnp9CFLSOKuJKEsjGqebw&s',
            ],
            [
                'name' => 'Bose QuietComfort 35',
                'price' => '3000',
                'description' => 'Noise-cancelling headphones for immersive sound',
                'category' => 'headphones',
                'gallery' => 'https://m.media-amazon.com/images/I/71W7VDwM7IL._AC_UF1000,1000_QL80_.jpg',
            ],
            [
                'name' => 'Dell Alienware Aurora',
                'price' => '13000',
                'description' => 'A gaming desktop with powerful performance and design',
                'category' => 'computer',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCzsjy-7hZh-DoDtQ82UO75T5BIaZilR34Xg&s',
            ],
            [
                'name' => 'Sony PlayStation 5',
                'price' => '8000',
                'description' => 'The next-gen gaming console with powerful graphics',
                'category' => 'gaming',
                'gallery' => 'https://media.istockphoto.com/id/1441687733/photo/gamer-playing-playstation-5-game-console-with-dualsense-controller.jpg?s=612x612&w=0&k=20&c=xhJaPXDsdPC2mhI8jIkzvbL3CCx7zhjyreRTrisE-ww=',
            ],
            [
                'name' => 'LG 27GN950-B Monitor',
                'price' => '5500',
                'description' => 'A 27-inch 4K UHD gaming monitor with 144Hz refresh rate',
                'category' => 'monitor',
                'gallery' => 'https://m.media-amazon.com/images/I/81fdHiIG1dL.jpg',
            ],
            [
                'name' => 'Microsoft Surface Pro 7',
                'price' => '7500',
                'description' => 'A powerful tablet with laptop functionality',
                'category' => 'tablet',
                'gallery' => 'https://m.media-amazon.com/images/I/61qS1eDVy9S.jpg',
            ],
            [
                'name' => 'Google Pixel 6',
                'price' => '6000',
                'description' => 'A smartphone with Google Tensor chip and camera prowess',
                'category' => 'mobile',
                'gallery' => 'https://m.media-amazon.com/images/I/61ruKkvVIxL.jpg',
            ],
            [
                'name' => 'Sony X900H 65 Inch TV',
                'price' => '10000',
                'description' => 'A 65-inch 4K LED smart TV with vivid display',
                'category' => 'tv',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaGhvy9cChoLVB2et5G9F6hbfc5G_MRw4a_A&s',
            ],
            [
                'name' => 'Apple AirPods Pro',
                'price' => '2500',
                'description' => 'Wireless earbuds with active noise cancellation',
                'category' => 'headphones',
                'gallery' => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/airpods-pro-2-hero-select-202409_FV1_FMT_WHH?wid=752&hei=636&fmt=jpeg&qlt=90&.v=1725492498882',
            ],
            [
                'name' => 'Xiaomi Mi Smart Band 6',
                'price' => '5000',
                'description' => 'A smart fitness band with heart-rate monitoring',
                'category' => 'wearable',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2clVuKhiNsd-V9P-wWRE5toN-GTzYh4eVvg&s',
            ],
            [
                'name' => 'GoPro HERO10 Black',
                'price' => '40000',
                'description' => 'A waterproof action camera with ultra-high definition recording',
                'category' => 'camera',
                'gallery' => 'https://m.media-amazon.com/images/I/61A31TlXnuL.jpg',
            ]
            
            ,
            [
                'name' => 'LG fridge',
                'price' => '20000',
                'description' => 'A fridge with much more feature',
                'category' => 'fridge',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU',
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->updateOrInsert(
                ['name' => $product['name']], // Check if the product already exists by name
                $product // Insert or update the product
            );
        }
    }
}
