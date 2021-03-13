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

    <title>Internet Services List</title>
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
    
    <div class="container">
      <h1 class="m-5" align="center"><strong>Internet Services</strong></h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
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

</body>
</html>