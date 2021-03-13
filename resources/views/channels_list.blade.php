<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Channels List</title>
</head>
<body>
    @foreach ($channels as $channel)
        <h3>{{ $channel->name }}</h3>
        <button><a href="{{ route('programs.add_channel', ['id' => $channel->id]) }}">Añadir Programación</a></button>
        <br>
    @endforeach
</body>
</html>