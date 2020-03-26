<?php

use Illuminate\Database\Seeder;

use App\Post;

use Faker\Generator as Faker;
use Mmo\Faker\PicsumProvider;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $faker->addProvider(new PicsumProvider($faker));
      for ($i=0; $i < 25 ; $i++) {

        $newpost= new Post;
        $newpost->content = $faker->text($maxNbChars = 500);
        $newpost->content_img = $faker->picsumUrl();
        $newpost->author = $faker->name;
        $newpost->author_img = $faker->picsumUrl(200, 200);
        $newpost->save();
      }
    }
}
