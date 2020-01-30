<?php

use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name' => 'News'
        ]);

        $category2 = Category::create([
            'name' => 'Product'
        ]);

        $category3 = Category::create([
            'name' => 'Updates'
        ]);

        $post1 = Post::create([
            'title' => 'We relocated our office to a new designed garage.',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg'
        ]);

        $post2 = Post::create([
            'title' => 'We relocated our office to a new designed garage 2.',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg'
        ]);

        $post3 = Post::create([
            'title' => 'We relocated our office to a new designed garage 3.',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg'
        ]);

        $tag1 = Tag::create([
            'name' => 'News'
        ]);

        $tag2 = Tag::create([
            'name' => 'Product'
        ]);

        $tag3 = Tag::create([
            'name' => 'Updates'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag1->id, $tag3->id]);
        $post3->tags()->attach([$tag2->id, $tag3->id]);
    }
}
