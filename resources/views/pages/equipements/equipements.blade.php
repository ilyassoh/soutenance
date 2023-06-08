<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{URL('css/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL('css/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL('css/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{URL('css/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL('css/assets/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{URL('css/assets/css/style2.css')}}">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <link rel="stylesheet" href="{{URL('css/equipementes.css')}}">
  <link rel="stylesheet" href="{{URL('css/header.css')}}">
  <title>CAC</title>
</head>

<body onload="afficheLab(1)">

  @include('partitions.header')
  <script>
    document.getElementById('equipements').setAttribute('id', 'activeLink')
  </script>

  <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" id="img_equip">
        <h2 class="fixed-bottom text-center"> Les equipements </h2>
      </div>
    </div>
  </div> -->


  <div class="accordion" id="accordionPanelsStayOpenExample">

    <!-- <div class="wrapper d-flex align-items-stretch"> -->
    <!-- <nav id="sidebar">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
        </div>
        <div class="p-4">
          <h1><a class="logo">Les equipementes<span>les machine de CAC </span></a></h1>
          <ul class="list-unstyled components mb-5">
            <li id="liLab1" class="active">
              <a href="#content" onclick="afficheLab('1')" > Labo 1</a>
            </li>
            <li id="liLab2">
              <a href="#content" onclick="afficheLab('2')" > Labo 2</a>
            </li>
            <li>
              <a href="#content"> Labo 3</a>
            </li>
            <li>
              <a href="#content"> Labo 4</a>
            </li>
            <li>
              <a href="#content"> Labo 5</a>
            </li>
            <li>
              <a href="#content"> Labo 6</a>
            </li>
            <li>
              <a href="#content"> Labo 7</a>
            </li>
          </ul>

          <div class="mb-5">
            <h3 class="h6 mb-3">Chercher ici</h3>
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <div class="icon"><span class="icon-paper-plane"></span></div>
                <input type="text" class="form-control" placeholder="Searche...">
              </div>
            </form>
          </div>

        </div>
      </nav> -->

    <ButtonGroup variant="outlined" aria-label="outlined button group">
      <Button style="color:blue; " onclick="afficheLab('1')">FSSM</Button>
      <Button onclick="afficheLab('2')">CAC</Button>
    </ButtonGroup>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
      <h2 class="mb-4" id="title"></h2>
      <div id="lab1">
        <section id="work" class="portfolio-mf sect-pt4 route">
          <div class="container">
            <div class="row">
              @foreach($machine as $row)
<<<<<<< Updated upstream
              @if( $row['local'] =='radio1')
=======
>>>>>>> Stashed changes
              <!-------------------- machine 1 ----------------------->
              <div class="col-sm-3">
                <div class="work-box">
                  <a href="{{URL('imgs/machie_1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="{{URL('imgs/machie_1.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h2 class="w-title">
                          {{$row['designation']}}
                        </h2>
                        <div class="w-more">
                          <span class="w-ctegory">{{$row['label']}}</span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">
                          <a href="{{route('machine-details')}}"> <span class="bi bi-plus-circle"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<<<<<<< Updated upstream
              @endif
=======
>>>>>>> Stashed changes
              @endforeach
            </div>
        </section>
      </div>
      <!------------------------ lab2 ----------------------->
      <div id="lab2" style="display: none;">
        <section id="work" class="portfolio-mf sect-pt4 route">
          <div class="container">
            <div class="row">
              <!-------------------- machine 1 ----------------------->
<<<<<<< Updated upstream
              @foreach($machine as $row)
               @if( $row['local'] =='radio2')
=======
>>>>>>> Stashed changes
              <div class="col-sm-3">
                <div class="work-box">
                  <a href="{{URL('imgs/machie_1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="{{URL('imgs/machie_3.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
<<<<<<< Updated upstream
                        <h2 class="w-title"> {{$row['label']}}</h2>
                        <div class="w-more">
                          <span class="w-ctegory"> {{$row['designation']}}</span> / <span class="w-date">18 Sep. 2018</span>
=======
                        <h2 class="w-title">Machine 1</h2>
                        <div class="w-more">
                          <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
>>>>>>> Stashed changes
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">
                          <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<<<<<<< Updated upstream
              @endif
              @endforeach
              </div>
        </section>
      </div>
              <!-------------------- machine 2 ----------------------->
          <!--    <div class="col-md-3">
=======
              <!-------------------- machine 2 ----------------------->
              <div class="col-md-3">
>>>>>>> Stashed changes
                <div class="work-box">
                  <a href="{{URL('imgs/machie_1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="{{URL('imgs/machie_3.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h2 class="w-title">Machine 2</h2>
                        <div class="w-more">
                          <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">
                          <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<<<<<<< Updated upstream
              </div> -->
              <!-------------------- machine 2 ----------------------
=======
              </div>
              <!-------------------- machine 2 ----------------------->
>>>>>>> Stashed changes
              <div class="col-md-3">
                <div class="work-box">
                  <a href="{{URL('imgs/machie_1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="{{URL('imgs/machie_3.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h2 class="w-title">Machine 3</h2>
                        <div class="w-more">
                          <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">
                          <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="work-box">
                  <a href="{{URL('imgs/machie_1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="{{URL('imgs/machie_3.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h2 class="w-title">Machine 2</h2>
                        <div class="w-more">
                          <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">
                          <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<<<<<<< Updated upstream
              ------------------ machine 2 ----------------------
=======
              <!-------------------- machine 2 ----------------------->
>>>>>>> Stashed changes
              <div class="col-md-3">
                <div class="work-box">
                  <a href="{{URL('imgs/machie_1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="{{URL('imgs/machie_3.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h2 class="w-title">Machine 3</h2>
                        <div class="w-more">
                          <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">
                          <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
<<<<<<< Updated upstream
-->
         
=======
            </div>
        </section>
      </div>
>>>>>>> Stashed changes

    </div>
  </div>

  <script src="{{URL('css/assets/js/jquery.min.js')}}"></script>
  <script src="{{URL('css/assets/js/popper.js')}}"></script>
  <script src="{{URL('css/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{URL('css/assets/js/main2.js')}}"></script>

  </div>


  @include('partitions.footer')

  <script>
    function afficheLab(x) {
      for (let i = 1; i < 3; i++) {
        document.getElementById('lab' + i).style.display = "none"
      }

      document.getElementById('lab' + x).style.display = ""
      for (let i = 1; i < 3; i++) {
        document.getElementById('liLab' + i).setAttribute('class', '')
      }

      document.getElementById('liLab' + x).setAttribute('class', 'active')
      document.getElementById('title').innerHTML = 'Lab' + x
    }
  </script>


</body>

</html>