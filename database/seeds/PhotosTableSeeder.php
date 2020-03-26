<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 8; $i++) {
        $newPhoto = new Photo;
        $newPhoto->url = "https://picsum.photos/id/" . rand(1, 100) . "/300/200";
        $newPhoto->user_id = rand(1, 3);
        $newPhoto->save();
      }
    }
}
