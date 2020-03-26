<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Avatar;
use App\User;

class AvatarsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {
    $users = User::All();
    foreach ($users as $user) {
      $newAvatar = new Avatar;
      $newAvatar->photo = "https://i.pravatar.cc/150?img=" . rand(1, 70);
      $newAvatar->user_id = $user->id;
      $newAvatar->save();
    }
  }
}
