<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("css/app.css")}}">

  <title>Document</title>
</head>
<body>
  <form class="form-group" action="{{route("photos.store")}}" method="post">
    @csrf
   @method('POST')
    <select class="form-control" name="message_id">
      @foreach ($messages as $message)
        <option value="{{$message->id}}">{{$message->user->name}} - {{$message->title}}</option>
      @endforeach
    </select>
    <input type="text" name="path" value="{{old('path')}}" placeholder="image path">
    <input type="submit" name="" value="SEND">
  </form>
</body>
</html>
