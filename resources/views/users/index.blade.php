<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
  </head>
  <body>
    <div class="users">
      @foreach ($users as $user)
        <div class="user">
          <h2>Nome: {{$user->name}}</h2>
          <span>ID: {{$user->id}}</span>
          <h3>E-Mail: {{$user->email}}</h3>
          <h3>Password: {{$user->password}}</h3>
          <span>Created at: {{$user->created_at}}</span>
          @foreach ($user->photo as $url)
            <img src="{{$url->url}}" alt="">
          @endforeach
        </div>
      @endforeach
    </div>
  </body>
</html>
