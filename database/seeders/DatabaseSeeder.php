<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Item;
use App\Models\Sale;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Category::factory()->count(10)->create();
        Item::factory()->count(50)->create();
        Sale::factory()->count(20)->create();
    }
}
