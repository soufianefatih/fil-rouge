


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOME</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
	<link rel="stylesheet" >
       <!-- Styles -->
       <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>

                @if (Route::has('login'))
                {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
              @auth
                   @if(Auth()->user()->role =='patient')
                    <li class="nav-item">
                       <a class="nav-link" href="{{ url('/patient') }}" >Profile</a>
                    </li>
                    @elseif(Auth()->user()->role =='medecin')
                    <li class="nav-item">
                       <a class="nav-link" href="{{ url('/medecin') }}" >Profile</a>
                    </li>
                    @elseif(Auth()->user()->role =='scrt')
                    <li class="nav-item">
                       <a class="nav-link" href="{{ url('/scrt') }}" >Profile</a>
                    </li>
                    @endif
              @else
                    <li class="nav-item">
                       <a  class="nav-link" href="{{ route('login') }}" >Log in</a>
                    </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}" >Register</a>
                        </li>
                        @endif
                @endauth
                {{-- </div> --}}
            @endif




          </ul>
          {{-- <form class="form-inline my-2  ml-5 my-lg-0">






                            </form> --}}
        </div></div>
      </nav>


                                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                          <div class="carousel-item active">
                                            <img src="images/header.jpg" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                              <h5>First slide label</h5>
                                              <p>Some representative placeholder content for the first slide.</p>
                                              <div >
                                                  <button type="button" class="btn btn-primary btn-lg" >sign up </button>
                                                  <button  type="button" class="btn btn-outline-primary btn-lg" >sign in</button>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="carousel-item">
                                            <img  src="images/header.jpg" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                              <h5>Second slide label</h5>
                                              <p>Some representative placeholder content for the second slide.</p>
                                              <div>
                                                  <button type="button" class="btn btn-primary btn-lg" >sign up</button>
                                                  <button  type="button" class="btn btn-outline-primary btn-lg" >sign in</button>
                                            </div>
                                            </div>
                                          </div>
                                          <div class="carousel-item">
                                            <img  src="images/header.jpg" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                              <h5>Third slide label</h5>
                                              <p>Some representative placeholder content for the third slide.</p>
                                             <div>
                                                <button type="button" class="btn btn-primary btn-lg" >sign up</button>
                                                 <button  type="button" class="btn btn-outline-primary btn-lg" >sign in</button>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                      </div>





                                      <main class="py-4">
                                        @yield('container')
                                    </main>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>
</body>
</html>





