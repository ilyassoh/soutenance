<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="{{URL('css/apropos.css')}}">
    <link rel="stylesheet" href="{{URL('css/header.css')}}">
    <title>CAC | a Propos</title>
</head>
<body>

    @include('partitions.header')
    <script>
        document.getElementById('apropos').setAttribute('id','activeLink')
    </script>
    
    <!-- Slide  -->
    <div class="site-header position-relative overflow-hidden p-5 p-md-5 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto">
        </div>
    </div>

    <!-- Section d'histoire  -->
    <!-- <div class="accordion container text-center my-5" id="accordionExample">
      <h2 class="my-3" >Histoire de CAC</h2>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Accordion Item 1  &nbsp;&nbsp;&nbsp;&nbsp;
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Accordion Item 2 &nbsp;&nbsp;&nbsp;&nbsp;
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Accordion Item 3 &nbsp;&nbsp;&nbsp;&nbsp;
          </button> 
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
    </div> -->
    <div class="accordion container text-center my-5" id="accordionExample">
      <h2 class="my-3" >A Propos de CAC</h2>
      <p>
      Le Centre d'Analyse et de Caractérisation (C.A.C) est un service commun de l'Université Cadi Ayyad (UCA) 
      rattaché à la Cité d'Innovation. Il constitue une plateforme technologique, mise en place par 
      l'UCA dans le cadre du programme de développement de sa recherche scientifique. 
      Il est ouvert à l'ensemble des structures de recherche de l'UCA et au monde socio-économique.
      </p>
    </div>

    <!--Section des Services  -->
    <section id="services" class="my-5 text-center">
      <div class="container">
        <h2 class="text-center mb-2">Nos Services</h2>
        <div class="row">
          <div class="col-md-4 mb-5" >
            <div class="card">
              <div class="card-body" style="min-height:150px;">
                <h3 class="card-title">Service 1</h3>
                <p class="card-text">Mutualisation et mise à la disposition de moyens d'analyses au profit des chercheurs et du tissu socio-économique.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5" >
            <div class="card">
              <div class="card-body" style="min-height:150px;">
                <h3 class="card-title">Service 2</h3>
                <p class="card-text">Promotion de l'activité scientifique et technologique.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5" >
            <div class="card">
              <div class="card-body" style="min-height:150px;">
                <h3 class="card-title">Service 3</h3>
                <p class="card-text">Promotion de l'activité scientifique et technologique.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    

    <!-- Section de équipe de CAC  -->
    <div class="container">
      <div class="row blog">
        <h2 class="center mx-auto text-center py-4">La Structure Organisationnelle</h2>
        <div class="col-md-12">
          <div id="blogCarousel" class="carousel slide" data-ride="carousel">
            <ol class="invisible carousel-indicators">
              <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#blogCarousel" data-slide-to="1"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner my-3">
              <div class="carousel-item active">
                <div class="row justify-content-center">
                      @foreach ($users as $user)
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="our-team  rounded-4">
                          <div class="pic">
                              <img src="{{ asset('storage/' . $user->avatar) }}">
                          </div>
                          <div class="team-content">
                              <h3 class="title">{{ $user->name ;}}</h3>
                              @php
                                switch ($user->role_id) {
                                case "1":
                                  $description  =  "Directeur de CAC.";
                                    break;
                                case "4":
                                  $description  =  "Secrétaire générale.";
                                    break;
                                case "5":
                                  foreach($machines as $m){
                                    if ($user->id == $m->users_id){
                                      $machine = $m ;
                                    }
                                  }
                                  $description  =  "Responsable de La Machine ".$machine->label;
                                    break;
                                default:
                                  $description  =  "Inkonnu (e)";
                                    break;
                                }
                              @endphp
                              <span class="post">{{ $description ;}}</span>
                          </div>
                          <a class="social pb-3 text-decoration-none text-lignt fw-b fs-5" href="mailto:{{$user->email}}">Contact</a>
                        </div>
                      </div>
                      @endforeach
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br>
    <!-- Sponseurs  -->
    @include('pages.home.sponsors')

    <!-- Footer  -->
    @include('partitions.footer')

</div>
</body>
</html>
