<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return view('index');
});
Route::get('/api/sliders', function () {
    return response()->json([
                    [
                    'id' => '1',
                    'title' => 'Slider 1',
                    'image' => 'img/main-slider1.jpg'
                ], [
                    'id' => '2',
                    'title' => 'Slider 2',
                    'image' => 'img/main-slider2.jpg'
                ], [
                    'id' => '3',
                    'title' => 'Slider 3',
                    'image' => 'img/main-slider3.jpg'
                ], [
                    'id' => '4',
                    'title' => 'Slider 4',
                    'image' => 'img/main-slider4.jpg'
                ]
    ]);
});
Route::get('/api/item/feature', function () {
    $products = [
            [
            'id' => '1',
            'title' => 'Fur coat with very but very very long name',
            'link' => '#',
            'price' => [
                'orginal' => '$280.00',
                'final' => '$143.00'
            ],
            'ribbon' => ['sale', 'new', 'gift'],
            'thumb' => [
                'front' => 'img/product1.jpg',
                'back' => 'img/product1_2.jpg'
            ]
        ],
            [
            'id' => '2',
            'title' => 'White Blouse Armani',
            'link' => '#',
            'price' => [
                'orginal' => '$280.00',
                'final' => '$280.00'
            ],
            'ribbon' => ['sale', 'gift'],
            'thumb' => [
                'front' => 'img/product2.jpg',
                'back' => 'img/product2_2.jpg'
            ]
        ],
            [
            'id' => '3',
            'title' => 'Black Blouse Versace',
            'link' => '#',
            'price' => [
                'orginal' => '$500.00',
                'final' => '$293.00'
            ],
            'ribbon' => ['sale', 'new'],
            'thumb' => [
                'front' => 'img/product3.jpg',
                'back' => 'img/product3_2.jpg'
            ]
        ], [
            'id' => '4',
            'title' => 'Fur coat with very but very very long name',
            'link' => '#',
            'price' => [
                'orginal' => '$143.00',
                'final' => '$143.00'
            ],
            'ribbon' => ['sale', 'new', 'gift'],
            'thumb' => [
                'front' => 'img/product1.jpg',
                'back' => 'img/product1_2.jpg'
            ]
        ],
            [
            'id' => '5',
            'title' => 'White Blouse Armani',
            'link' => '#',
            'price' => [
                'orginal' => '$280.00',
                'final' => '$143.00'
            ],
            'ribbon' => ['sale', 'gift'],
            'thumb' => [
                'front' => 'img/product2.jpg',
                'back' => 'img/product2_2.jpg'
            ]
        ],
            [
            'id' => '6',
            'title' => 'Black Blouse Versace',
            'link' => '#',
            'price' => [
                'orginal' => '$500.00',
                'final' => '$293.00'
            ],
            'ribbon' => ['sale', 'new'],
            'thumb' => [
                'front' => 'img/product3.jpg',
                'back' => 'img/product3_2.jpg'
            ]
        ]
    ];
    return response()->json($products);
});
