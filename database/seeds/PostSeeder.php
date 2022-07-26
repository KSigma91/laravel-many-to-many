<?php

use App\Models\Post;
use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories_ids = Category::all()->pluck('id');

        for ($i = 0; $i < 60; $i++) {
            $post = new Post;
            $post->slug = Post::getSlug($post->title);
            $post->title = $faker->words(rand(2, 4));
            $post->category_id = $faker->randomElement($categories_ids);
            $post->image = 'https://picsum.photos/id/' . rand(1, 100) . '/500/300';
            $post->content = $faker->paragraphs(rand(3, 6), true);
            $post->excerpt = $faker->paragraphs();
            $post->save();
        }
    }
}
