<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{asset('static/logo-unet.png')}}" />
    <title>Programs | List</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="{{ route('adminHome') }}">Cable Unet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('users.index') }}">Users</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('channels.index') }}">Channels</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('programs.index') }}">Programs</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('channels.schedules') }}">Schedules</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('invoices.index') }}">Invoices</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('change_requests.index') }}">See users requests</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
          </form>
        </div>
    </nav>

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