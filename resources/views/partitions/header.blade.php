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
          <a id="home" class="nav-link fs-7 pb-1 px-0 mx-2" aria-current="page" href="{{route('index-page')}}">Accueil</a>
        </li>
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
          <a id="apropos" class="nav-link fs-7 pb-1 px-0 mx-2" href="{{route('apropos')}}" tabindex="-1" aria-disabled="true">a propos</a>
        </li>
        <li class="nav-item">
          <a id="contact" class="nav-link fs-7 pb-1 px-0 mx-2" href="{{route('contact')}}" tabindex="-1" aria-disabled="true">contact</a>
        </li>
      </ul>
      <form class="d-flex" style="padding : 0px; margin:0px;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search-input">
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
<div id="search-results"></div>
<div id="popup" class="popup rounded-3">
  <div class="popup-content">
    <span class="close-btn fs-3 text-danger fw-bold">&times;</span>
    <ul id="popup-results"></ul>
  </div>
</div>
<style>
  .popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    padding: 20px;
    background-color: #f1f1f1;
    border: 1px solid #ccc;
    z-index: 9999;
  }

  .popup-content {
    display: flex;
    flex-direction: column;
  }

  .close-btn {
    align-self: flex-end;
    cursor: pointer;
  }

  .popup-results li {
    margin-bottom: 10px;
  }
</style>
<script>
document.getElementById('search-input').addEventListener('input', function() {
  var searchTerm = this.value.toLowerCase();
  var elements = document.querySelectorAll('p,h1,a,h3,span');
  var resultsContainer = document.getElementById('search-results');
  var popupResultsContainer = document.getElementById('popup-results');
  var popup = document.getElementById('popup');
  var closeBtn = document.querySelector('.close-btn');

  // Réinitialiser les résultats précédents
  resultsContainer.innerHTML = '';
  popupResultsContainer.innerHTML = '';

  // Parcourir les paragraphes de la page
  for (var i = 0; i < elements.length; i++) {
    var paragraphText = elements[i].textContent.toLowerCase();

    // Vérifier si le paragraphe contient le terme de recherche
    if (paragraphText.includes(searchTerm) && searchTerm != '') {
      // Assigner un ID temporaire au paragraphe
      elements[i].setAttribute('id', 'temp-id-' + i);
      elements[i].style.backgroundColor = "yellow";

      var resultItem = document.createElement('li');
      var resultLink = document.createElement('a');
      resultLink.href = '#';
      resultLink.textContent = elements[i].textContent;
      resultLink.addEventListener('click', function(event) {
        event.preventDefault();
        var paragraphId = this.getAttribute('data-paragraph-id');
        scrollToParagraph(paragraphId);
      });
      resultLink.setAttribute('data-paragraph-id', 'temp-id-' + i);

      resultItem.appendChild(resultLink);
      popupResultsContainer.appendChild(resultItem);
    } else {
      elements[i].removeAttribute('id');
      elements[i].style.backgroundColor = "";

    }
  }
  if (popupResultsContainer.children.length > 0) {
    popup.style.display = 'block';
  } else {
    popup.style.display = 'none';
  }
});

// Fermer la popup en cliquant sur le bouton de fermeture
document.querySelector('.close-btn').addEventListener('click', function() {
  document.getElementById('popup').style.display = 'none';
});

function scrollToParagraph(paragraphId) {
  var paragraph = document.getElementById(paragraphId);
  paragraph.scrollIntoView({ behavior: 'smooth', block: 'start' });

  // Supprimer l'ID temporaire du paragraphe après le défilement
  paragraph.removeAttribute('id');
}
</script>