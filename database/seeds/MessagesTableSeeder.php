<?php

use Illuminate\Database\Seeder;
use App\Message;
use Faker\Generator as Faker;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $newMessage = new Message();
          $newMessage->title = $faker->realText($maxNbChars = 50, $indexSize = 2);
          $newMessage->content = $faker->paragraph;
          $newMessage->sender = $faker->title . $faker->name;
          $newMessage->save();
        }
    }
}
