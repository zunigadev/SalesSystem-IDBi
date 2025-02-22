<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'SKU' => 'PROD001',
                'productName' => 'Laptop Dell Inspiron',
                'unitPrice' => 850.99,
                'stock' => 20,
            ],
            [
                'SKU' => 'PROD002',
                'productName' => 'Teclado Mecánico RGB',
                'unitPrice' => 59.99,
                'stock' => 50,
            ],
            [
                'SKU' => 'PROD003',
                'productName' => 'Monitor Samsung 24"',
                'unitPrice' => 199.99,
                'stock' => 30,
            ],
            [
                'SKU' => 'PROD004',
                'productName' => 'Mouse Inalámbrico Logitech',
                'unitPrice' => 29.99,
                'stock' => 80,
            ],
            [
                'SKU' => 'PROD005',
                'productName' => 'Silla Gamer Ergonómica',
                'unitPrice' => 299.99,
                'stock' => 10,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
