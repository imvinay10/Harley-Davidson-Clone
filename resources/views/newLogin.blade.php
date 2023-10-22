<!DOCTYPE html>

<meta name="robots" content="noindex">
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Log In</title>
<style id="jsbin-css">
html,
body
{
  width: 100%;
  height: 100%;
  margin: 0 auto;
}

.block
{
  color: white;
  background-color: black;
  padding: 5%;
}

.block-1
{
  background-color: #000000;
background-image: linear-gradient(315deg, #000000 0%, #414141 74%);
  height: 650px;
  
}

.full-page
{
  height: 100vh;
}

.carousel-placeholder
{
  width: 100%;
  height: 100%;
  background-color: black;
  color: white;
  background-size: cover;
}



.carousel-placeholder-2
{
  background-color: #324376;
}

.carousel-placeholder-3
{
  background-color: #586ba4;
}

.carousel-item
{
  height: 100vh;
}

#featured-products-carousel
{
  width: 100%;
  margin: 0 auto;
}

.block
{
  color: white;
  align-content: center;
  padding: 5%;
 
}

.block-1
{
  background-color: #324376;
}

.block-2
{
  background-color: #586ba4;
}

.block-3
{
  background-color: #f76c5e;
}

.block-4
{
  background-color: #f68e5f;
}
.contact{
  color: white;
  background-color: black;
}

@media screen only and (min-width: 700px)
{
  
  .block-2
  {
    display: flex;
    flex-direction: row;
  }
  
  .first-order-reponsive
  {
    order: 1;
  }
  
  .second-order-responsive
  {
    order: 2;
  }
  
}









</style>
</head>
  
<body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a href="home.html" class="l-6"style="margin: left 20px;" >
      <img src="{{ asset('/custom/images/logo.png')}}" style="height: 80px;">
    </img>
    </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#services-overview">Overview</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#featured-products-carousel">Featured</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
          
    </ul>
  </div>
  
  </nav>
  
  
  <div id="services-overview" class="py-10 text-center block block-1">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid" style="width: 100%; " id="service-1">
      
        <div class="row featurette "  id="service-1">
      
            <div class="col-md-5 py-5 text-center">
              <img src="{{ asset('/custom/images/test.png')}}" width="380px" height="300px">
            </div>
            
            <div class="col-md-7">
            <form method="POST" action="{{ route('login') }}" class="text-right" style="width: 350px;">
                        @csrf
                
                    <div class="form-group text-left " >
                      <label for="exampleInputEmail1">Email address</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group  text-left ">
                      <label for="exampleInputPassword1">Password</label>
                      <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group form-check  text-left ">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="text-left">
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                    </div>
                    
                    </div>
                    
                  </form>
                
            </div>
            
          </div>
    
    
    
  </div>
  
 
    
 
</body>
  
</html>
