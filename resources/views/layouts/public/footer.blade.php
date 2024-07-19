<footer id="footer">
  <div class="container">
    <h3>{{ $footer->title }}</h3>
    <p>
      {{ $footer->description }}
    </p>
    <div class="social-links">
      <a href="{{ $footer->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="{{ $footer->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="{{ $footer->github }}" class="google-plus"><i class="bx bxl-github"></i></a>
      <a href="{{ $footer->linkedin }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
    <div class="copyright">
      &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by {{ $footer->copyright }}
    </div>
  </div>
</footer>
