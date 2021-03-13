<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .container {
          max-width: 960px;
        }

        .pricing-header {
          max-width: 700px;
        }
    </style>

    <title>Admin|Home</title>
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
              <a class="nav-link" href="#">Users <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a href="{{ route('logout') }}"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button></a>
          </form>
        </div>
    </nav>

    <!-- servcios -->
    <div class="container">
      <h1 class="mt-5" align="center"><strong>Services</strong></h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mx-2">
        @foreach ($services as $service)
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h1 class="my-0 fw-normal">{{ ucfirst($service->name) }}</h1>
                    </div>

                    <div class="card-body">
                      <h2 class="card-title pricing-card-title">${{ $service->price }} <small class="text-muted">/ mo</small></h2>
                      <button type="button" class="w-100 btn btn-lg btn-outline-primary">Get it now</button>
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
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mx-2">
        @foreach ($internetServices as $internetService)
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h1 class="my-0 fw-normal">{{ ucfirst($internetService->name) }}</h1>
                    </div>

                    <div class="card-body">
                      <h2 class="card-title pricing-card-title">${{ $internetService->price }} <small class="text-muted">/ mo</small></h2>
                      <h3 class="card-title pricing-card-title">{{ $internetService->speed }} <small class="text-muted"></small></h3>
                      <button type="button" class="w-100 btn btn-lg btn-outline-primary">Get it now</button>
                    </div>
                </div>
            </div>   
        @endforeach
    </div> 

    <div class="container">
      <div class="row">
        <div class="col text-center">
          <a href="{{ route('internet_services.create') }}">
            <button type="button" class="btn btn-primary">Añadir nuevos servicios de internet</button>
          </a>
        </div>
      </div>
    </div>

    <!-- servcios de teléfono -->
    <div class="container mt-5">
      <h1  align="center"><strong>Phone Services</strong></h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mx-2">
        @foreach ($phoneServices as $phoneService)
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h1 class="my-0 fw-normal">{{ ucfirst($phoneService->name) }}</h1>
                    </div>

                    <div class="card-body">
                      <h2 class="card-title pricing-card-title">${{ $phoneService->price }} <small class="text-muted">/ mo</small></h2>
                      <h3 class="card-title pricing-card-title">{{ $phoneService->plan_limit }} <small class="text-muted"></small></h3>
                      <button type="button" class="w-100 btn btn-lg btn-outline-primary">Get it now</button>
                    </div>
                </div>
            </div>   
        @endforeach
    </div> 

    <div class="container">
      <div class="row">
        <div class="col text-center">
          <a href="{{ route('phone_services.create') }}">
            <button type="button" class="btn btn-primary">Añadir nuevos servicios de telefonía</button>
          </a>
        </div>
      </div>
    </div>


    <!-- servcios de cable -->
    <div class="container mt-5">
      <h1  align="center"><strong>Cable Services</strong></h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mx-2">
        @foreach ($cableServices as $cableService)
            <div class="col">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                      <h1 class="my-0 fw-normal">{{ ucfirst($cableService->name) }}</h1>
                    </div>

                    <div class="card-body">
                      <h2 class="card-title pricing-card-title">${{ $cableService->price }} <small class="text-muted">/ mo</small></h2>
                      <button type="button" class="w-100 btn btn-lg btn-outline-primary">Get it now</button>
                    </div>
                </div>
            </div>   
        @endforeach
    </div> 

    <div class="container">
      <div class="row">
        <div class="col text-center">
          <a href="{{ route('cable_services.create') }}">
            <button type="button" class="btn btn-primary">Añadir nuevos servicios de cable</button>
          </a>
        </div>
      </div>
    </div>

</body>
</html>