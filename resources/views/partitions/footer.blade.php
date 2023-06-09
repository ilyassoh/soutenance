<!-- Footer -->
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
            <i class="fas fa-gem me-3 text-secondary"></i>name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-4">
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

        <!-- Grid column -->
        <div class="col-md-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            DES LIENS UTILES
          </h6>
          <p>
            <a href="{{ route('contact') }}" class="text-reset">CONTACT NOUS </a>
          </p>
          <p>
            <a href="{{ route('connexion') }}" class="text-reset">CONNEXION</a>
          </p>
          <p>
            <a href="{{ route('inscription') }}" class="text-reset">INSCRIPTION</a>
          </p>
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
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
<!-- Footer -->

<style>
    .socialMedia img:hover{
        transform : scale(1.5);
        cursor: pointer;
    }
</style>