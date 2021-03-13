<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Program</title>
</head>
<body>

    <form action="{{ route('programs.store') }}" method="POST">
        @csrf
        <input type="date" name="date" required>
        <input type="text" name="program_name" required>
        <input type="time" name="starts_at" required>
        <input type="time" name="ends_at" required>
        <button type="submit" value="send">ok</button>
    </form>


</body>
</html>