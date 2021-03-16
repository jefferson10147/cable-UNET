<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{asset('static/logo-unet.png')}}" />
    <title>Schedules</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="{{ route('home') }}">Cable Unet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto"></ul>
          <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
          </form>
        </div>
    </nav>


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
