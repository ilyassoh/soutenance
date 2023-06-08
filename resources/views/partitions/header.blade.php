<link rel="stylesheet" href="{{URL('css/header.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
		crossorigin="anonymous"></script>
  
    <script src="{{URL('js/header.js')}}"></script>

<nav id="navbar_top" class="navbar navbar-expand-lg navbar-light bg-light mt-0">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('index-page')}}">
      <img src="{{url('imgs/home_logo.png')}}" width="160" class="d-inline-block align-top rounded-3" alt="Bootstrap" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center ms-5" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a id="actualite" class="nav-link fs-7 pb-1 px-0 mx-2" aria-current="page" href="{{route('actualite')}}">Actualités</a>
        </li>
        <li class="nav-item">
          <a id="equipements" class="nav-link fs-7 pb-1 px-0 mx-2"  href="{{route('equipements')}}" tabindex="-1" aria-disabled="true">Equipements</a>
        </li>
        <li class="nav-item">
          <a id="recherches" class="nav-link fs-7 pb-1 px-0 mx-2" href="{{route('recherches')}}" tabindex="-1" aria-disabled="true">Recherches</a>
        </li>
        <li class="nav-item">
          <a id="media" class="nav-link fs-7 pb-1 px-0 mx-2" href="{{route('media')}}" tabindex="-1" aria-disabled="true">Media</a>
        </li>
        <li class="nav-item">
          <a id="apropos" class="nav-link fs-7 pb-1 px-0 mx-2" href="{{route('apropos')}}" tabindex="-1" aria-disabled="true">apropos</a>
        </li>
        <li class="nav-item">
          <a id="contact" class="nav-link fs-7 pb-1 px-0 mx-2" href="{{route('contact')}}" tabindex="-1" aria-disabled="true">contact</a>
        </li>
      </ul>
      <form class="d-flex" style="padding : 0px; margin:0px;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
      <div class="dropstart text-center mx-2" style="padding : 0px; margin:0px;">
        <a href="{{route('connexion')}}">
          <button class="btn btn-light rounded-3 py-2 fw-bold" type="button">
              <i class="fa-solid fa-user fs-6 mr-2"></i> Connexion
            </button>
        </a>
      </div>
    </div>
  </div>
</nav>