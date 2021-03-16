<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{asset('static/logo-unet.png')}}" />
    <title>Home</title>
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

      <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
          <div class="container">
            <h1 class="display-3">Welcome {{ $user->name }} </h1>
            <p>Cable UNET is one of the most recognized companies nationwide, we have the fastest internet services in the country so that you always stay connected, we offer telephone services so that you stay connected, and we also offer cable services, so you don't get lost the programming of your favorite channels</p>
        </div>
        </div>

        <div class="position-relative overflow-hidden p-3 p-md-2 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto">
                @if ($user->service)
                    <h2 class="font-weight-normal"> {{ ucfirst($user->service->service_name) }} is your currently service, you have to pay ${{ $user->service->price }} per month</h2>
                    <p class="lead font-weight-normal"> </p>
                    <a class="btn btn-outline-secondary" href="{{ route('users.changeService', ['id' => $user->id])}}"> Change my service </a>

                @else
                    <p class="lead font-weight-normal"> Currently you do not have any contracted service </p>
                    <a class="btn btn-outline-secondary" href="{{ route('services.index')}}"> Buy service </a>
                @endif

            </div>
            <div class="product-device box-shadow d-none d-md-block"></div>
            <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
        </div>
  
        <div class="container">
          <!-- Example row of columns -->
            <div class="row">
                @if ($user->service)
                    @if ($user->service->internetService)
                        <div class="col">
                            <h2>Internet Service</h2>
                            <p>Your internet service is our {{ ucfirst($user->service->internetService->name) }} plan, just for ${{ $user->service->internetService->price }} you can enjoy {{ $user->service->internetService->speed }} of download</p>
                        </div>
                    @endif

                    @if ($user->service->cableService)
                        <div class="col">
                            <h2>Cable Service</h2>
                            <p>Your cable service is our {{ ucfirst($user->service->cableService->name) }} package, just for ${{ $user->service->cableService->price }}</p>
                            <p>
                                <!-- aqui el drop down de los canales -->
                                <div  class="row justify-content-md-center">
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-outline-info">See the channels</button>
                                      <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                      </button>
                                      <div class="dropdown-menu">
                                        @foreach ($user->service->cableService->packages as $package)
                                          <li class="dropdown-item">{{ $package->channel->name }}</li>    
                                        @endforeach
                                      </div>
                                    </div>
                                </div>
                            </p>
                        </div>
                    @endif
                    
                    
                    @if ($user->service->phoneService)
                        <div class="col">
                            <h2>Phone Service</h2>
                            <p>Your phone service plan is our {{ ucfirst($user->service->phoneService->name) }} plan, just for ${{ $user->service->phoneService->price }} you have {{ $user->service->phoneService->plan_limit }} to all operators.</p>
                        </div>
                    @endif
                @endif
                
            </div>
        </div>
  

        @if (!$user->invoices->isEmpty())
            <div class="container"> 
                <div class="row">
                    <div class="container mt-5">
                        <h4  align="center">Your Invoices</h4>
                    </div>
    
                    <table class="table table-sm mx-auto mt-1" style="width: 30%;"">
                        <caption>Once you have paid the invoice, please notify administrators</caption>
    
                        <thead class="table-dark">
                            <tr>
                                <th>Amount</th>
                            </tr>
                        </thead>
    
                        <tbody>
                            @foreach ($user->invoices as $invoice)
                                <tr>
                                    <td>  ${{ $invoice->amount }} </td>
                                </tr>
                            @endforeach            
                        </tbody>
                    </table>
                </div>  
                
            </div>
        @endif
    </main>
  <div class="container mt-5"></div>
      
</body>
</html>
