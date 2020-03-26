<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Photo;

use Faker\Generator as Faker;
use Mmo\Faker\PicsumProvider;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      
        $faker->addProvider(new PicsumProvider($faker));

        for ($i=0; $i < 50; $i++) {
            $newphoto = new Photo;
            $newphoto->user_id = rand(1, 15);
            $newphoto->photo_path = $faker->picsumUrl();
            $newphoto->save();
        }
       
        
    }
}
