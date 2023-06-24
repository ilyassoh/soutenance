<!-- Footer -->
@foreach ($parametres as $p)
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-center p-4 border-bottom">
    <!-- Right -->
    <div class="socialMedia fs-3">
      <img class="me-4" src="{{URL('imgs/facebook.png')}}" height="40" alt="facebook">
      <img class="me-4" src="{{URL('imgs/linkedin.png')}}" height="40" alt="linkedin">
      <img class="me-4" src="{{URL('imgs/youtube.png')}}" height="40" alt="youtube">
      <img class="me-4" src="{{URL('imgs/twitter.png')}}" height="40" alt="twitter">
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3 text-center">
        <!-- Grid column -->
        <div class="col-md-4 mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>CAC
          </h6>
          <p>
          {{ $p->description }}
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Nos Pages
          </h6>
          <p>

            <a href="{{ route('equipements') }}" class="text-reset">Equipements</a>
          </p>
          <p>
            <a href="{{ route('recherches') }}" class="text-reset">Recherches</a>
          </p>
           <p>
            <a href="{{ route('media') }}" class="text-reset">Media</a>
          </p>
          <p>
            <a href="{{ route('actualite') }}" class="text-reset">Actualite</a>

          </p>
          <p>
            <a href="{{ route('apropos') }}" class="text-reset">a propos</a>
          </p>
        </div>
        <!-- Grid column -->
        <div class="col-md-4 mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> {{ $p->location }}</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            {{ $p->Contact_email }}
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i>{{ $p->Contact_Number }}</p>
          <p><i class="fas fa-print me-3 text-secondary"></i>{{ $p->Contact_fixe }}</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);"> 
    © 2023 Copyright
  </div>
  <!-- Copyright -->
</footer>
@endforeach
<!-- Footer -->

<style>
    .socialMedia img:hover{
        transform : scale(1.5);
        cursor: pointer;
    }
</style>