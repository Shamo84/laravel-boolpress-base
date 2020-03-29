<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h3>{{$message->title}}</h3>
  <p>{{$message->content}}</p>
  @foreach ($message->photos as $photo)
    <img src="{{$photo->url}}" alt="">
  @endforeach
  <p>Created at: {{$message->created_at}}</p>
  <form class="" action="{{route("messages.show", $message->id)}}" method="head">
    @csrf
    @method('HEAD')
    <input type="submit" name="add" value="ADD NEW PHOTO">
  </form>
</body>
</html>
