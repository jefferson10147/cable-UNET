<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{asset('static/logo-unet.png')}}" />
    <title>Users | List</title>
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
        <caption>List of users</caption>
        
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }}</td>
                    <td> {{ $user->created_at }}</td>
                    <td> {{ $user->updated_at }}</td>

                    <td>
                        <div class="container">
                            <div class="row">
                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" class="pr-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-lg btn-outline-danger btn-sm">Delete</button>
                                </form>                              
                                @if (!$user->role)
                                    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-lg btn-outline-secondary btn-sm">Make Admin</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach            
        </tbody>
    </table>
</body>
</html>