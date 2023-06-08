<<<<<<< Updated upstream
<?php
$string = ["publications\\June2023\\iKPnHJAZviW7dyw1KPKS.jpg"];

$string = str_replace('\\', '/', $string);
$string = str_replace('[', '', $string);
$string = str_replace(']', '', $string);
$string = str_replace('\\', '/', $string);
$string = str_replace('[', '', $string);
$string = str_replace(']', '', $string);
?>

<!DOCTYPE html>
<html lang="en">
  
=======
<!DOCTYPE html>
<html lang="en">

>>>>>>> Stashed changes
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <link rel="stylesheet" href="{{URL('css/actualite.css')}}">
    <link rel="stylesheet" href="{{URL('css/header.css')}}">
    <title>CAC</title>
</head>
<body class="bg-light">

    @include('partitions.header')

    <script>
        document.getElementById('actualite').setAttribute('id','activeLink')
    </script>
<<<<<<< Updated upstream
 
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active ">
     
    @for ($i=count($data)-1 ; $i>0;  $i--)
    @if ($data[$i]->type=='radio1')
      <img src="{{ asset('storage/' . $data[$i]->photo) }}"class="d-block w-100" alt="Wild Landscape" height="500"/>
      <div class="carousel-caption d-none d-md-block">

        <h5>{{$data[$i]->titre}}</h5>
        <p>{{$data[$i]->description}}</p>
      </div>
      @break
   @endif
      @endfor 
    </div>
  </div>
</div>

=======
  
    
<div class="carsoul">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
       <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
       
    <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000" mx-3>
      <img src="{{URL('imgs/actual.jpg')}}" class="d-block w-100" alt="slide1" height="450px" >
      <div class="carousel-caption d-none d-md-block">
        <h5>actualite trois</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000" mx-3>
      <img src="{{URL('imgs/backLab1.jpg')}}" class="d-block w-100" alt="..." height="450px">
      <div class="carousel-caption d-none d-md-block">
        <h5>la 2 éme actualite </h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" mx-3>
      <img src="{{URL('imgs/actualite1.jpg')}}" class="d-block w-100" alt="..." height="450px">
      <div class="carousel-caption d-none d-md-block">
        <h5>la 3 éme actualite</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
 
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>


>>>>>>> Stashed changes
<!-- second part -->

<br>

<<<<<<< Updated upstream
 <!-- hadi fiha ga3 les annonces mohime -->

  <!--Main layout-->
  
=======
 <!-- hadi fiha ga3 les annoces mohime -->

  <!--Main layout-->
  @foreach ($data as $actualite)
>>>>>>> Stashed changes
  <main class="mt-5">
    <div class="container">
      <!--Section: Content-->
      <section>
<<<<<<< Updated upstream
      @foreach ($data as $actualite)
      @if ($actualite->type =='radio1')
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
             <!-- <img src="{{URL('imgs/backLab1.jpg')}}" class="img-fluid" /> -->
              <img src="{{ asset('storage/' . $actualite->photo) }}" alt="Publication Image"  width='500' height="200">
=======
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="{{URL('imgs/backLab1.jpg')}}" class="img-fluid" />
>>>>>>> Stashed changes
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>{{$actualite->titre}} </strong></h4>
            <p class="text-muted">
              {{$actualite->description}}
            </p>
<<<<<<< Updated upstream
          </div>
        </div>
        @endif
        @endforeach
      </section>

  
=======
            <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
              nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
              alias, unde optio accusantium soluta, iusto molestiae adipisci et?
            </p>
          </div>
        </div>
      </section>




      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="{{URL('imgs/backLab1.jpg')}}" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>{{$actualite->titre}}</strong></h4>
            <p class="text-muted">
              {{$actualite->description}}
            </p>
            <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
              nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
              alias, unde optio accusantium soluta, iusto molestiae adipisci et?
            </p>
          </div>
        </div>
      </section>


      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="{{URL('imgs/backLab1.jpg')}}" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>
          @endforeach
          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>3 eme actualite du semaine</strong></h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
              eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
              sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
            </p>
            <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
              nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
              alias, unde optio accusantium soluta, iusto molestiae adipisci et?
            </p>
          </div>
        </div>
      </section>




>>>>>>> Stashed changes


   <!-- hado fihum les  buttons  --> 

      <!--Section: Content-->

     <!-- <hr class="my-5" /> -->

      <!--Section: Content-->
<<<<<<< Updated upstream
     
      
=======
>>>>>>> Stashed changes
      <section class="text-center">
        <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>

        <div class="row">
<<<<<<< Updated upstream
          @foreach ($data as $actualite)
          @if ($actualite->type =='radio1')
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <div height="100" width="300">
                  <img src="{{ asset('storage/' . $actualite->photo) }}" class="img-fluid"  />
                </div>
                
=======
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
>>>>>>> Stashed changes
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
<<<<<<< Updated upstream
                <h5 class="card-title">{{$actualite->titre}}</h5>
                <p class="card-text">
                {{$actualite->description}}
                </p>
              </div>
            </div>
          </div>
          @endif
      @endforeach
          <!--
=======
                <h5 class="card-title">Actualite</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

>>>>>>> Stashed changes
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
<<<<<<< Updated upstream
                <h5 class="card-title">{{$actualite->titre}}</h5>
                <p class="card-text">
                {{$actualite->description}}
=======
                <h5 class="card-title">Actualite</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
>>>>>>> Stashed changes
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
<<<<<<< Updated upstream
                <h5 class="card-title">{{$actualite->titre}}</h5>
                <p class="card-text">
              {{$actualite->description}}
=======
                <h5 class="card-title">Actualite</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
>>>>>>> Stashed changes
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
        </div>
<<<<<<< Updated upstream
-->
    
<!--
=======

    

>>>>>>> Stashed changes
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Actualite</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Actualite</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Actualite</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
        </div>
      </section>
<<<<<<< Updated upstream
-->
=======
>>>>>>> Stashed changes
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
     
      <!--Section: Content-->
    </div>
  </main>
    @include('partitions.footer')
</body>
</html>