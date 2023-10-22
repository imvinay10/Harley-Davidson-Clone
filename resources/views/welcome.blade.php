<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
        <title>Laravel</title>

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
    <body >
       <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        -->
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
          
        <a class="nav-link" href="{{ route('login') }}">LogIn</a>
      </li>
          
    </ul>
  </div>
  
  </nav>
  
  
  <div id="services-overview" class="py-10 text-center block block-1">
    
    
    <br>
    <br> 
    
    <h5 style="font-family: abril-fatface;">IRON 883™</h5>
      <br>
    <h2 class="" style="font-family: abril-fatface;">Raw, Blacked-Out, </h2>
    <h2 class=""style="font-family: abril-fatface;">Stripped-Down </h2>
    <h2 class=""style="font-family: abril-fatface;">Custom Style</h2>
    <img src="{{ asset('/custom/images/first.png')}}" style="height: 350px; ">
    <div class="container ">
      
      
    </div>
    
    
    
  </div>
  
  
  <div id="featured-products-carousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      
      <li data-target="#featured-products-carousel" data-slide-to="0" class="active">
      </li>
      
      <li data-target="#featured-products-carousel" data-slide-to="1">
      </li>
      
      <li data-target="#featured-products-carousel" data-slide-to="2">
      </li>
      
    </ol>
    
    <div class="carousel-inner">
      
      <div class="carousel-item active image-container">
        
        <div class="carousel-placeholder  carousel-placeholder-1">
          <video class="video-fluid" autoplay loop muted width="100%" >
            <source src="{{ asset('/custom/images/harley.mp4')}}" type="video/mp4" />
          </video>
          
        </div>
        
        <div class="container image-container">
          
          <div class="carousel-caption image-container text-left">
            
            <h2>FAT BOY™ 114</h2>
            
            <p>
              <a  href="fatboy"  style="color:white">
                Learn more
              </a>
            </p>
          </div>
        </div>
      </div>
  
      
      <div class="carousel-item">
        
        <div class="carousel-placeholder carousel-placeholder-2">
          <video class="video-fluid" autoplay loop muted width="100%" >
            <source src="{{ asset('/custom/images/fatbob.mp4')}}" type="video/mp4" />
          </video>
          
        </div>
        
        <div class="container">
          
          <div class="carousel-caption">
            
            <h2>FAT BOB™ 114</h2>
            
            <p>
              <a  href="fatbob"  style="color:white">
                Learn more
              </a>
            </p>
          </div>
          
        </div>
        
      </div>
     
      
      <div class="carousel-item">
        
        <div class="carousel-placeholder carousel-placeholder-3">
          <video class="video-fluid" autoplay loop muted width="100%" >
            <source src="{{ asset('/custom/images/iron.mp4')}}" type="video/mp4" />
          </video>
        </div>
        
        <div class="container">
          
          <div class="carousel-caption text-right">
            
            <h2>IRON 883™</h2>
            
            <p>
              <a  href="iron"  style="color:white">
                Learn more
              </a>
            </p>
            
          </div>
          
        </div>
        
      </div>
      
      
      <a class="carousel-control-prev" href="#featured-products-carousel" role="button" data-slide="prev">
        
        <span class="carousel-control-prev-icon" aria-hidden="true">
          
        </span>
        <span class="sr-only">Previous</span>
        
      </a>
      
      <a class="carousel-control-next" href="#featured-products-carousel" role="button" data-slide="next">
        
        <span class="carousel-control-next-icon" aria-hidden="true">
        </span>
        
        <span class="sr-only">Next</span>
        
      </a>
      
    </div>
   
  </div>
  
  
      
  <div class="container-fluid" style="width: 100%; background-color: #000000;" id="service-1">
      
    <div class="row" >
      <div class="col-sm-3 " >
        <img src="{{ asset('/custom/images/grid4.png')}}" style="height: 250px; width:match-parent;">
      </div>
      <div class="col-sm-3" >
        <img src="{{ asset('/custom/images/grid2.jpeg')}}" style="height: 250px; width:match-parent;">
      </div>
      <div class="col-sm-3" >
        <img src="{{ asset('/custom/images/grid3.jpeg')}}" style="height: 250px; width:match-parent;">
      </div>
      <div class="col-sm-3" >
        <img src="{{ asset('/custom/images/grid4.png')}}" style="height: 250px; width:match-parent;">
      </div>
    </div>
    
  </div>
  <div class="row featurette py-5 block block-1"  id="service-1">
      
    <div class="col-md-5 py-5 text-center">
      <img src="{{ asset('/custom/images/test.png')}}" width="350px" height="300px">
    </div>
    
    <div class="col-md-7">
      <h1 class="featurette-heading py-5 ">BOOK A TEST RIDE
       
      </h2>
        
        <p class="">Got a dream Harley® motorcycle in mind? Here’s a chance to book a test ride and live the dream. Complete the form and you’ll be one step closer to the first of many great rides.</p>
       
        <p>
          <a  href="#service-1"  style="color:white">
            Learn more
          </a>
        </p>
        
    </div>
    
  </div>
  <div style="background-color: black;" class="py-2">
  <section id="contact" class="contact mb-4 py-2 px-2 m-5">
    
    <h2 class="h2-responsive font-weight-bold text-center my-4">
      Contact us
    </h2>
    
    <p class="text-center w-responsive mx-auto mb-5">
      Do you have any questions? Contact us and our team will be happy to help within 2 business days.
    </p>
    
    <div class="row">
      
      <div class="col-md-9 mb-md-0 mb-5">
        
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
          
          <div class="row">
            
            <div class="col-md-6">
              
              <div class="md-form mb-0">
                
                <input type="text" id="name" name="username" class="form-control">
                <label for="username">
                  Name
                </label>
                
              </div>
              
            </div>
            
            <div class="col-md-6">
              
              <div class="md-form mb-0">
                
                <input type="text" id="email" name="email" class="form-control">
                <label for="email">
                  Email
                </label>
                
              </div>
              
            </div>
            
          </div>
          
          <div class="row">
            
            <div class="col-md-12">
              
              <div class="md-form mb-0">
                
                <input type="text" id="subject" name="subject" class="form-control">
                
                <label for="subject">
                  Subject
                </label>
                
              </div>
              
            </div>
            
          </div>
          
          <div class="row">
            
            <div class="col-md-12">
              
              <div class="md-form">
                
                <textarea type="text" id="message" name="message" rows="2" class="form-conrol md-textarea">
                </textarea>
                
                <label for="message">
                  Message
                </label>
               
              </div>
              
            </div>

          </div>
          
        </form>
        
        <div class="text-center text-md-left">
          
          <a class="btn btn-primary text-white" onclick="document.getElementById('contact-form').submit();">
            Send
          </a>
          
        </div>
        <div class="status"></div>
        
      </div>
      
      <div class="col-md-3 text-center">
        
        <ul class="list-unstyled mb-0">
          
          <li>
            <i class="fas fa-envelope mt-4 fa-2x">
            </i>
            
          </li>
          
        </ul>
        
      </div>
      
    </div>
    
  </section>
</div>
    
 
    </body>
</html>
