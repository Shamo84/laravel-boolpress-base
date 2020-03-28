<?php

use Illuminate\Database\Seeder;
use App\Photo;
use App\User;

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
        $users = User::all();
        $newPhoto = new Photo;
        $newPhoto->url = "https://picsum.photos/id/" . rand(1, 100) . "/300/200";
        $newPhoto->user_id = rand(1, 3);
        $newPhoto->message_id = rand(1, $users->find($newPhoto->user_id)->get()->messages->count());
        $newPhoto->save();
      }
    }
}
