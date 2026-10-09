<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'name' => 'Americano',
            'category' => 'Coffee',
            'description' => 'A classic espresso-based Arabica coffee drink made with hot water and espresso.',
            'price' => 17000,
            'is_available' => true,
        ]);
        Menu::create([
            'name' => 'Iced Latte',
            'category' => 'Coffee',
            'description' => 'A refreshing espresso-based coffee drink made with cold milk and ice.',
            'price' => 20000,
            'is_available' => true,
        ]);
        Menu::create([
            'name' => 'Iced Matcha Latte',
            'category' => 'Non Coffee',
            'description' => 'A refreshing matcha-based drink made with cold milk and ice.',
            'price' => 21000,
            'is_available' => true,
        ]);
    }
}
