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