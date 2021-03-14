<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Update | Service</title>
</head>
<body>

    <div class="content">
        <div class="container">
            <div class="row align-items-stretch justify-content-center no-gutters">
                <div class="col-md-7">
                    <div class="form h-100 contact-wrap p-5">
                        <h3 class="text-center">Update service package</h3>
                        <form action="{{ route('services.update', ['service' => $service->id]) }}" class="mb-5" method="POST">
                           
                            @csrf
                            @method('PUT')

                            <div class="row">
                              <div class="col-md-12 form-group mb-6">
                                <label for="" class="col-form-label">Service Name *</label>
                                <input type="text" class="form-control" name="service_name" value="{{ $service->service_name }}">
                              </div>
                            </div> 
                            <div class="row">
                              <div class="col-md-12 form-group">
                                <label for="budget" class="col-form-label">Internet Service *</label>
                                <select class="custom-select" name="internet_service_id">
                                    <option value="{{ $mainInternetService->id }}">{{ $mainInternetService->name }}</option>
                                    
                                    @foreach ($internetServices as $internetService)
                                        @if ($internetService->name != $mainInternetService->name)
                                            <option value="{{ $internetService->id }}">{{ $internetService->name }}</option>
                                        @endif
                                    @endforeach

                                </select>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="budget" class="col-form-label">Phone Service *</label>
                                    <select class="custom-select" name="phone_service_id">
                                        <option value="{{ $mainPhoneService->id }}">{{ $mainPhoneService->name }}</option>
                                        
                                        @foreach ($phoneServices as $phoneService)
                                            @if ($phoneService->name != $mainPhoneService->name)
                                                <option value="{{ $phoneService->id }}">{{ $phoneService->name }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="budget" class="col-form-label">Cable Service *</label>
                                    <select class="custom-select" name="cable_service_id">
                                        <option value="{{ $mainCableService->id }}">{{ $mainCableService->name }}</option>

                                        @foreach ($cableServices as $cableService)
                                            @if ($cableService->name != $mainCableService->name)
                                                <option value="{{ $cableService->id }}">{{ $cableService->name }}</option>
                                            @endif
                                        @endforeach

                                    </select>
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