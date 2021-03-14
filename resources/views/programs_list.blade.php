<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Programs | List</title>
</head>
<body>
    <table class="table table-sm mx-auto mt-5" style="width: 85%;"">
        <caption>List of programs with an assigned channel</caption>
        
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Program Starts at</th>
                <th>Program Ends at</th>
                <th>Transmitted in</th>
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($programs as $program)
                @if ($program->channel_id)
                    <tr>
                        <td> {{ $program->program_name }} </td>
                        <td> {{ $program->date }} </td>
                        <td> {{ $program->starts_at }} </td>
                        <td> {{ $program->ends_at }} </td>
                        <td> {{ $program->channel->name }} </td>

                        <td>
                            <form action="{{ route('programs.destroy', ['program' => $program->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-lg btn-outline-danger btn-sm">Delete</button>
                            </form> 
                        </td>
                    </tr>
                @endif
            @endforeach            
        </tbody>
    </table>

    <table class="table table-sm mx-auto mt-5" style="width: 85%;"">
        <caption>List of programs without an assigned channel</caption>
        
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Program Starts at</th>
                <th>Program Ends at</th>
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($programs as $program)
                @if (!$program->channel_id)
                    <tr>
                        <td> {{ $program->program_name }} </td>
                        <td> {{ $program->date }} </td>
                        <td> {{ $program->starts_at }} </td>
                        <td> {{ $program->ends_at }} </td>

                        <td>
                            <form action="{{ route('programs.destroy', ['program' => $program->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-lg btn-outline-danger btn-sm">Delete</button>
                            </form> 
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
              <button type="button" class="btn btn-primary">Create a new program</button>
            </a>
          </div>
        </div>
    </div>

    <!--
    <a href=" route('programs.destroy', ['program' => $program->id])">
        <button class="btn btn-outline-danger">Delete</button>
    </a>
    -->
</body>
</html>