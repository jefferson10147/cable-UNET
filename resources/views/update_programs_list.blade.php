<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Program To Channel</title>
</head>
<body>
    @foreach ($programs as $program)
        <h3>{{ $program->program_name }}</h3>
        <button><a href="{{ route('programs.updateProgramChannel', ['id' => $program->id, 'channel_id' => $channelId]) }}">Añadir este programa al canal</a></button>
        <br>
    @endforeach
</body>
</html>