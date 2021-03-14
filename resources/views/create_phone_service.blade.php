<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Create | Phone Service</title>
</head>
<body>
    <div class="content">
        <div class="container">
          <div class="row align-items-stretch justify-content-center no-gutters">
            <div class="col-md-7">
              <div class="form h-100 contact-wrap p-5">
                <h3 class="text-center">Create a new phone service</h3>
                <form action="{{ route('phone_services.store') }}" class="mb-5" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md-6 form-group mb-3">
                        <label for="" class="col-form-label">Phone Service Name *</label>
                        <input type="text" class="form-control" name="name" placeholder="name">
                      </div>
                      <div class="col-md-6 form-group mb-3">
                        <label for="" class="col-form-label">Plan Limit *</label>
                        <input type="text" class="form-control" name="plan_limit" placeholder="plan">
                      </div>
                    </div>
    
                    <div class="row">
                      <div class="col-md-12 form-group mb-3">
                        <label for="budget" class="col-form-label">Price Per Month *</label>
                        <input type="number" class="form-control" name="price" id="price" placeholder="price" step="0.01">
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
</body>
</html>