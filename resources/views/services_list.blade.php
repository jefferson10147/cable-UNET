<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5" align="center"><strong>Choose your new package</strong></h1>
      </div>
      
    <div class="container mt-3">
      <div class="row">
        @foreach ($services as $service)
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
                            <form action="{{ route('users.replaceService', ['id' => $user->id, 'service_id' => $service->id]) }}" method="POST">
                              @csrf
                              @method('GET')
                              <button type="submit" class="btn btn-lg btn-outline-success btn-sm mr-1">Hire</button>
                            </form>  
                        </div>
                      </div>
                    </div>
                </div>
            </div>   
        @endforeach
    </div>
</body>
</html>