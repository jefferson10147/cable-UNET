<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Invoices | List</title>
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

    <table class="table table-sm mx-auto mt-5" style="width: 65%;"">
        <caption>List of invoices</caption>
        
        <thead class="table-dark">
            <tr>
                <th>User</th>
                <th>Email</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <td> {{ $invoice->user->name }} </td>
                    <td> {{ $invoice->user->email }} </td>
                    <td> {{ $invoice->amount }} </td>
                    <td>
                        <form action="{{ route('invoices.destroy', ['invoice' => $invoice->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-lg btn-outline-success btn-sm">Paid</button>
                        </form> 
                    </td>
                </tr>
            @endforeach            
        </tbody>
    </table>

    <div class="container">
        <div class="row">
          <div class="col text-center">
            <a href="{{ route('invoices.generateInvoices') }}">
              <button type="button" class="btn btn-primary">Generate Invoices</button>
            </a>
          </div>
        </div>
    </div>

    
</body>
</html>