<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{asset('static/logo-unet.png')}}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Creating | Package</title>
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

  <div class="content">
    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <h3 class="text-center">Adding Channels to Cable Service</h3>
            <form action="{{ route('packages.store') }}" class="mb-5" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-12 form-group mb-3">
                    <label for="" class="col-form-label">Cable Service *</label>
                    <select class="custom-select" name="cable_service_id">
                        @foreach ($cableServices as $cableService)
                            <option value="{{ $cableService->id }}">{{ $cableService->name }}</option>
                        @endforeach
                    </select>
                    
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group mb-3">
                    <label for="budget" class="col-form-label">Channels *</label>
                    <select class="js-example-basic-multiple custom-select" multiple="multiple" name="channels_ids[]">
                        @foreach ($channels as $channel)
                            <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>

                <div class="row justify-content-center">
                  <div class="col-md-5 form-group text-center">
                    <input type="submit" value="Create" class="btn btn-block btn-primary">
                    <span class="submitting"></span>
                  </div>
                </div>
            </form> 
          </div>
        </div>
      </div>
    </div>
  </div>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
</body>
</html>