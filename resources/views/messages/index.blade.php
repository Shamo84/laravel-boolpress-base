<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="messages">
    @foreach ($messages as $message)
      <div class="message">
        <h2>Title: {{$message->title}}</h2>
        <p>Content: {{$message->content}}</p>
        <h3>Sender: {{$message->sender}}</h3>
        <span>Created at: {{$message->created_at}}</span>
      </div>
    @endforeach
  </div>
</body>
</html>
