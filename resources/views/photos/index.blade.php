<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Users</title>
</head>
<body>
  <div class="photos">
    @foreach ($photos as $photo)
      <div class="photo">
        <img src="{{$photo->url}}" alt="">
      </div>
    @endforeach
  </div>
</body>
</html>
