@extends('layouts.app')
    
<body>
    
<header>
  
</header>
@section('content')
<main>

  <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    @foreach ($events as $event )
      
       
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">{{ $event->title }} </h2>
        <p class="lead">Event date: {{ $event->date }} </p>
        <p class="lead">Plazas: {{ $event->maxparticipants }} </p>
        <p class="lead">{{ $event->description }}</p>
      </div>
      <div class="col-md-5">
        <img src="{{ $event->image }}" class="d-block w-50" alt="...">
        
      </div>
    </div>
    
    <hr class="featurette-divider">
    
    @endforeach
    


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Back to top</a></p>
    <p>© 2017–2021 Company, Inc. · <a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Privacy</a> · <a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Terms</a></p>
  </footer>
</main>
<script src="{{ asset('CarouselTemplate/bootstrap.bundle.min.js.descarga') }}" ></script>
@endsection

   

      
  

<div></div></body></html>