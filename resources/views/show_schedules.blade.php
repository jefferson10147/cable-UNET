<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Schedules</title>
</head>
<body>
    @foreach ($channels as $channel)
        @if (!$channel->programs->isEmpty())
            <div class="container">
                <h1 class="mt-5" align="center"><strong>{{ $channel->name }}</strong></h1>
            </div>
            <table class="table table-sm mx-auto mt-2" style="width: 85%;"">
                <caption>{{ $channel->description }}</caption>

                <thead class="table-dark">
                    <tr>
                        <th>Program Name</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($channel->programs as $program)
                        <tr>
                            <td> {{ $program->program_name }} </td>
                            <td> {{ $program->date }}</td>
                            <td> {{ $program->starts_at }}</td>
                            <td> {{ $program->ends_at }}</td>
                        </tr>
                    @endforeach            
                </tbody>
            </table>
        @endif
    @endforeach
</body>
</html>
