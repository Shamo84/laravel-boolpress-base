<?php

use Illuminate\Database\Seeder;
use App\Photo;
use App\User;
use App\Message;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 10; $i++) {
        $user = User::inRandomOrder()->first();
        $message = $user->messages->random();
        $newPhoto = new Photo;
        $newPhoto->url = "https://picsum.photos/id/" . rand(1, 100) . "/300/200";
        $newPhoto->user_id = $user->id;
        $newPhoto->message_id = $message->id;
        $newPhoto->save();
      }
    }
}
