<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // تأكد من استيراد النموذج

class ProductSeeder extends Seeder
{
    public function run()
    {
        // إنشاء منتج تجريبي
        Product::create([
            'name' => 'Sample Product',
            'price' => 99.99,
            'description' => 'This is a sample product.',
        ]);
    }
}
