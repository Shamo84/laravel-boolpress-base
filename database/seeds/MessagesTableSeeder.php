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
          $newMessage->title = $faker->title;
          $newMessage->content = $faker->paragraph;
          $newMessage->sender = $faker->name;
          $newMessage->save();
        }
    }
}
