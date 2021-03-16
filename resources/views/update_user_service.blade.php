<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{asset('static/logo-unet.png')}}" />
    <title>Update | User Service</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark  sticky-top">
    <a class="navbar-brand" href="{{ route('home') }}">Cable Unet</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('channels.schedules') }}">Programming Schedules</a>
        </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
      </form>
    </div>
  </nav>

  <div class="container">
      <h1 class="mt-5" align="center"><strong>Update your service</strong></h1>
  </div>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h2 class="my-0 fw-normal">{{ ucfirst($user->service->service_name) }} package is your current service</h2>
      </div>
      <div class="card-body">
        <h5 class="card-title">You pay ${{ $user->service->price }} per month</h5>
        <p class="card-text">
          You count with  
          @if ($user->service->internetService)
              {{ $user->service->internetService->speed }} of download to navigate to through internet, 
          @endif
          @if ($user->service->phoneService)
              {{ $user->service->phoneService->plan_limit }} of limit in your phone plan to keep communicate,  
          @endif
          @if ($user->service->cableService)
              {{ $user->service->cableService->name }} as your cable package, so you can't miss your favorite movies, series and tv shows.  
          @endif
        </p>
      </div>
    </div>
  </div>

  <div class="container">
    <h1 class="mt-5" align="center"><strong>Choose your new package</strong></h1>
  </div>
  
  <div class="container mt-3">
    <div class="row">
      @foreach ($services as $service)
          @if ($service->id != $user->service->id)
              <div class="col">
                  <div class="card mb-4 shadow-sm text-center">
                      <div class="card-header">
                        <h2 class="my-0 fw-normal">{{ ucfirst($service->service_name) }}</h2>
                      </div>
                      <div class="card-body">
                        <h2 class="card-title pricing-card-title">${{ $service->price }} <small class="text-muted">/ mo</small></h2>
                        @if ($service->internetService)
                          <h3 class="card-title pricing-card-title"><small class="text-muted"> Internet Service: {{ ucfirst($service->internetService->name) }}</small></h3>
                        @endif
                        @if ($service->phoneService)
                          <h3 class="card-title pricing-card-title"><small class="text-muted"> Phone Service: {{ ucfirst($service->phoneService->name) }}</small></h3>
                        @endif
                        @if ($service->cableService)
                          <h3 class="card-title pricing-card-title"><small class="text-muted"> Cable Service: {{ ucfirst($service->cableService->name) }}</small></h3>
                        @endif
                      
                        <div class="container">
                          <div class="row justify-content-md-center">
                            <form action="{{ route('users.updateService', ['id' => $user->id, 'service_id' => $service->id]) }}" method="POST">
                              @csrf
                              @method('GET')
                              <button type="submit" class="btn btn-lg btn-outline-success btn-sm mr-1">Request Change</button>
                            </form>  
                          </div>
                        </div>
                      </div>
                  </div>
              </div>   
          @endif
      @endforeach
  </div>

  </div>
</body>
</html>