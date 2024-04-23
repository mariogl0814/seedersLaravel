<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        Esto Asignado datos nosotros
        Product::create([
            'name' => 'Example',
            'short_description' => 'Lorem ipsum',
            'description' => 'lorem ipsum dolor set',
            'price' => 25
        ]);

        Product::create([
            'name' => 'Example2',
            'short_description' => 'Lorem ipsum',
            'description' => 'lorem ipsum dolor set',
            'price' => 42
        ]);

        Product::create([
            'name' => 'Example3',
            'short_description' => 'Lorem ipsum',
            'description' => 'lorem ipsum dolor set',
            'price' => 60
        ]);
        */
        Product::factory()->count(150)->create();
    }
}
