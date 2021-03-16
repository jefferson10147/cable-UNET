<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Requests | List</title>
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
        <caption>List of Users Requests</caption>
        
        <thead class="table-dark">
            <tr>
                <th>User name</th>
                <th>User Email</th>
                <th>Current Service</th>
                <th>Wanted Service</th>
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($change_requests as $change_request)
                <tr>
                    <td> {{ $change_request->user->name }} </td>
                    <td> {{ $change_request->user->email }}</td>
                    <td> {{ $change_request->user->service->service_name }}</td>
                    <td> {{ $change_request->service->service_name }}</td>
                    <td>
                        <div class="container">
                            <div class="row">
                                <a href="{{ route('users.replaceService', ['id' => $change_request->user->id, 'service_id' => $change_request->service->id]) }}">
                                    <button class="btn btn-outline-secondary btn-sm">Accept</button>
                                </a>
                                
                                <div class="row pl-4">
                                    <form action="{{ route('change_requests.destroy', ['change_request' => $change_request->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-lg btn-outline-danger btn-sm">Decline</button>
                                    </form> 
                                </div>
                            </div>
                        </div>
                                
                                
                    </td>
                </tr>
            @endforeach            
        </tbody>
    </table>
    
</body>
</html>