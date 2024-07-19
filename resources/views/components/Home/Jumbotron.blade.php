<section id="hero" class="d-flex flex-column justify-content-center"
  style="background: url('{{ asset('storage/' . $jumbotron->background_image) }}') top right no-repeat;">
  <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <h1>{{ $jumbotron->name }}</h1>
    <p>
      I'm
      <span class="typed" data-typed-items="{{ $jumbotron->work }}"></span>
    </p>
    <div class="social-links">
      <a href="{{ $jumbotron->facebook }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="{{ $jumbotron->instagram }}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="{{ $jumbotron->github }}" target="_blank" class="google-plus"><i class="bx bxl-github"></i></a>
      <a href="{{ $jumbotron->linkedin }}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</section>
