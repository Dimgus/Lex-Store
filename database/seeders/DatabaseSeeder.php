<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Dimas Bagus',
            'email' => 'dimas@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '08123123123',
            'address' => 'Nginden'
        ]);
        User::create([
            'name' => 'Shalsabila',
            'email' => 'bila@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '0812341234',
            'address' => 'Pogot'
        ]);

        User::factory(10)->create();

        // Product::factory(10)->create();

        // Product::create([
        //     'product_name' => '',
        //     'price' => '',
        //     'stock' => '',
        //     'description' => ''
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
