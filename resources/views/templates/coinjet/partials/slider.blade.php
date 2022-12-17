<!-- START REVOLUTION SLIDER 5.4.2 auto mode -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset($activeTemplateTrue . 'images/slides/slide-01.jpg') }}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('assets/images/frontend/banner/6344fbb7e97d11665465271.jpeg') }}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('assets/images/frontend/banner/6344fbe3cc5321665465315.jpeg') }}" alt="Third slide">
      </div>
      {{-- <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset($activeTemplateTrue . 'images/slides/slide-02.jpg') }}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset($activeTemplateTrue . 'images/slides/slide-03.jpg') }}" alt="Third slide">
      </div> --}}
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <style>
      .carousel-item{
          height:80vh!important;
          border:2px solid orange;
      }
      .carousel-caption{
          top:50%;
          bottom:auto;
          left:2%;
      }
      @media only screen and (max-width: 600px) {
         .carousel-item{
          height:20vh!important;
          
      }
      }
  </style>
  