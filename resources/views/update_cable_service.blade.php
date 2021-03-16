<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Update | Cable Service</title>
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
              <h3 class="text-center">Update Cable Service</h3>
              <form action="{{ route('cable_services.update', ['cable_service' => $cableService->id]) }}" class="mb-5" method="POST">
                  
                  @csrf
                  @method('PUT')
                  
                  <div class="row">
                    <div class="col-md-6 form-group mb-3">
                      <label for="" class="col-form-label">Cable Service Name *</label>
                      <input type="text" class="form-control" name="name" value="{{ $cableService->name }}">
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-md-12 form-group mb-3">
                      <label for="budget" class="col-form-label">Price Per Month *</label>
                      <input type="number" class="form-control" name="price" value="{{ $cableService->price }}" step="0.01">
                    </div>
                  </div>
  
                  <div class="row justify-content-center">
                    <div class="col-md-5 form-group text-center">
                      <input type="submit" value="Update" class="btn btn-block btn-primary">
                      <span class="submitting"></span>
                    </div>
                  </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
  </div>
    
</body>
</html>