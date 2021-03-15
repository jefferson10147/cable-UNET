<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Admin | Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('adminHome') }}">Cable Unet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="">Users</a>
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
              <a class="nav-link" href="#">Invoices</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
          </form>
        </div>
    </nav>

    <!-- servcios -->
    <div class="container">
      <h1 class="mt-5" align="center"><strong>Services</strong></h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mx-2 table-active pt-2">
        @foreach ($services as $service)
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h1 class="my-0 fw-normal">{{ ucfirst($service->service_name) }}</h1>
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
                            
                            <form action="{{ route('services.destroy', ['service' => $service->id]) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-lg btn-outline-danger btn-sm mr-1">Delete</button>
                            </form>  

                            <a href="{{ route('services.edit', ['service' => $service->id]) }}">
                              <button type="submit" class="btn btn-lg btn-outline-primary btn-sm ml-1">Update</button>
                            </a>
                            
                        </div>
                      </div>
                    </div>
                </div>
            </div>   
        @endforeach
    </div> 

    <div class="container">
      <div class="row">
        <div class="col text-center">
          <a href="{{ route('services.create') }}">
            <button type="button" class="btn btn-primary">Create new services</button>
          </a>
        </div>
      </div>
    </div>
    
    <!-- servcios de internet -->
    <div class="container">
      <h1 class="mt-5" align="center"><strong>Internet Services</strong></h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mx-2 table-active pt-2">
        @foreach ($internetServices as $internetService)
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h1 class="my-0 fw-normal">{{ ucfirst($internetService->name) }}</h1>
                    </div>

                    <div class="card-body">
                      <h2 class="card-title pricing-card-title">${{ $internetService->price }} <small class="text-muted">/ mo</small></h2>
                      <h3 class="card-title pricing-card-title"><small class="text-muted">{{ $internetService->speed }}</small></h3>
                      <div class="container">
                        <div class="row justify-content-md-center">
                            <form action="{{ route('internet_services.destroy', ['internet_service' => $internetService->id]) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-lg btn-outline-danger btn-sm mr-1">Delete</button>
                            </form>  
                            
                            <a href="{{ route('internet_services.edit', ['internet_service' => $internetService->id]) }}">
                              <button type="submit" class="btn btn-lg btn-outline-primary btn-sm ml-1">Update</button>
                            </a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>   
        @endforeach
    </div> 

    <div class="container">
      <div class="row">
        <div class="col text-center">
          <a href="{{ route('internet_services.create') }}">
            <button type="button" class="btn btn-primary">Create new internet services</button>
          </a>
        </div>
      </div>
    </div>

    <!-- servcios de teléfono -->
    <div class="container mt-5">
      <h1  align="center"><strong>Phone Services</strong></h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mx-2 table-active pt-2">
        @foreach ($phoneServices as $phoneService)
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h1 class="my-0 fw-normal">{{ ucfirst($phoneService->name) }}</h1>
                    </div>

                    <div class="card-body">
                      <h2 class="card-title pricing-card-title">${{ $phoneService->price }} <small class="text-muted">/ mo</small></h2>
                      <h3 class="card-title pricing-card-title"><small class="text-muted">{{ $phoneService->plan_limit }}</small></h3>
                      <div class="container">
                        <div class="row justify-content-md-center">
                            <form action="{{ route('phone_services.destroy', ['phone_service' => $phoneService->id]) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-lg btn-outline-danger btn-sm mr-1">Delete</button>
                            </form>  
                            
                            <a href="{{ route('phone_services.edit', ['phone_service' => $phoneService->id]) }}">
                              <button type="submit" class="btn btn-lg btn-outline-primary btn-sm ml-1">Update</button>
                            </a>

                          </div>
                      </div>
                    </div>
                </div>
            </div>   
        @endforeach
    </div> 

    <div class="container">
      <div class="row">
        <div class="col text-center">
          <a href="{{ route('phone_services.create') }}">
            <button type="button" class="btn btn-primary">Create new phone services</button>
          </a>
        </div>
      </div>
    </div>


    <!-- servcios de cable -->
    <div class="container mt-5">
      <h1  align="center"><strong>Cable Services</strong></h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-1 text-center mx-2 table-active pt-2">
        @foreach ($cableServices as $cableService)
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h1 class="my-0 fw-normal">{{ ucfirst($cableService->name) }}</h1>
                    </div>

                    <div class="card-body">
                      <h2 class="card-title pricing-card-title">${{ $cableService->price }} <small class="text-muted">/ mo</small></h2>
                      <div class="container">
                        
                        <!-- aqui el drop down de los canales -->
                        <div  class="row justify-content-md-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-outline-info">Channels</button>
                            <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                              @foreach ($cableService->packages as $package)
                                <li class="dropdown-item">{{ $package->channel->name }}</li>    
                              @endforeach
                            </div>
                          </div>
                        </div>
                        
                        <div class="row justify-content-md-center mt-2 p-1">
                          <form action="{{ route('cable_services.destroy', ['cable_service' => $cableService->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-lg btn-outline-danger btn-sm">Delete</button>
                          </form>  
                          
                          <a href="{{ route('cable_service.addChannels', ['id' => $cableService->id]) }}">
                            <button type="submit" class="btn btn-lg btn-outline-secondary btn-sm mx-3">Add Channels</button>
                          </a>
                          
                          <a href="{{ route('cable_services.edit', ['cable_service' => $cableService->id]) }}">
                            <button type="submit" class="btn btn-lg btn-outline-primary btn-sm">Update</button>
                          </a>

                        </div>
                      </div>
                    </div>
                </div>
            </div>   
        @endforeach
    </div> 

    <div class="container">
      <div class="row">
        <div class="col text-center">
          <a href="{{ route('cable_services.create') }}">
            <button type="button" class="btn btn-primary">Create new cable services</button>
          </a>
        </div>
      </div>
    </div>

</body>
</html>