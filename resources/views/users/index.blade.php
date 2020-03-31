<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Users</title>
  </head>
  <body>
    <div class="users">
      @foreach ($users as $user)
        <form class="form-group" action="{{route("photos.create")}}" method="head">
          @csrf
          @method('HEAD')
          <input type="submit" name="add" value="ADD NEW PHOTO">
        </form>
        <div class="user">
          <h2>Nome: {{$user->name}}</h2>
          <img src="{{$user->avatar->photo}}" alt="">
          <span>ID: {{$user->id}}</span>
          <h3>E-Mail: {{$user->email}}</h3>
          <h3>Password: {{$user->password}}</h3>
          @foreach ($user->messages as $message)
            <h3>{{$message->title}}</h3>
            <p>{{$message->content}}</p>
            @foreach ($message->photos as $photo)
              <img src="{{$photo->url}}" alt="">
            @endforeach
            <p>Created at: {{$message->created_at}}</p>
          @endforeach
        </div>
      @endforeach
    </div>
  </body>
</html>
