<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Cable Service</title>
</head>
<body>

    <form action="{{ route('cable_services.store') }}" method="POST">
        @csrf
        <input type="text" name="name" required>
        <input type="number" step="0.01" name="price">
        <button type="submit" value="send">ok</button>
    </form>
    
</body>
</html>