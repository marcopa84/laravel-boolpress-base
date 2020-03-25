<?php

use Illuminate\Database\Seeder;

use App\Post;

use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 15 ; $i++) {

        $newpost= new Post;
        $newpost->content = $faker->text($maxNbChars = 500);
        $newpost->content_img = 'https://i.picsum.photos/id/102/400/300.jpg?blur=2';
        $newpost->author = $faker->name;
        $newpost->author_img = 'https://i.picsum.photos/id/1025/200/200.jpg';
        $newpost->save();
      }
    }
}
