<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Users | List</title>
</head>
<body>
    <table class="table table-sm mx-auto mt-5" style="width: 85%;"">
        <caption>List of users</caption>
        
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created at</th>
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