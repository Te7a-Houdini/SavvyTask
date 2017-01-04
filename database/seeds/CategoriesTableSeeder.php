<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 50)->create()->each(function ($u) {
            $u->translations()->save(factory(App\CategoryTranslation::class)->make());
            $u->posts()->save(factory(App\Post::class)->make());
        });
    }
}
