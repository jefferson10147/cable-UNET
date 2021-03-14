<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Channels | List</title>
</head>
<body>
    <table class="table table-sm mx-auto mt-5" style="width: 85%;"">
        <caption>List of Channels</caption>
        
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Descrition</th>
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($channels as $channel)
                <tr>
                    <td> {{ $channel->name }} </td>
                    <td> {{ $channel->description }}</td>
                    <td>
                        <a href="{{ route('programs.add_channel', ['id' => $channel->id]) }}">
                            <button class="btn btn-outline-secondary">Add Programs</button>
                        </a>

                        <a href="{{ route('channels.destroy', ['channel' => $channel->id]) }}">
                            <button class="btn btn-outline-danger">Delete</button>
                        </a>

                    </td>
                </tr>
            @endforeach            
        </tbody>
    </table>

    <div class="container">
        <div class="row">
          <div class="col text-center">
            <a href="{{ route('channels.create') }}">
              <button type="button" class="btn btn-primary">Create new channel</button>
            </a>
          </div>
        </div>
    </div>
    
</body>
</html>