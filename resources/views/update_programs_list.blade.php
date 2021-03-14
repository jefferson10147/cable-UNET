<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Add Program To Channel</title>
</head>
<body>
    <table class="table table-sm mx-auto mt-5" style="width: 85%;"">
        <caption>Adding program to channel</caption>
        
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Program Starts At</th>
                <th>Program Ends At</th>
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($programs as $program)
                @if (!$program->channel_id)
                    <tr>
                        <td> {{ $program->program_name }} </td>
                        <td> {{ $program->date }}</td>
                        <td> {{ $program->starts_at }}</td>
                        <td> {{ $program->ends_at }}</td>

                        <td>
                            <a href="{{ route('programs.updateProgramChannel', ['id' => $program->id, 'channel_id' => $channelId]) }}">
                                <button class="btn btn-outline-secondary">Add to Channel</button>
                            </a>
                        </td>
                    </tr>
                @endif
            @endforeach            
        </tbody>
    </table>

    <div class="container">
        <div class="row">
          <div class="col text-center">
            <a href="{{ route('programs.create') }}">
              <button type="button" class="btn btn-primary">Create new program</button>
            </a>
          </div>
        </div>
    </div>

</body>
</html>