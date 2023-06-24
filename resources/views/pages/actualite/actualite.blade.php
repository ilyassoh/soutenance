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
 
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active ">
     
    @for ($i=count($data)-1 ; $i>0;  $i--)
    @if ($data[$i]->type=='radio1')
      <img src="{{ asset('storage/' . $data[$i]->photo) }}"class="d-block w-100" alt="Wild Landscape" height="500"/>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">{{$data[$i]->titre}}</h5>
      </div>
      @break
   @endif
      @endfor 
    </div>
  </div>
</div>

<!-- second part -->

<br>
  <main class="mt-5">
    <div class="container">
      <section>
      @foreach ($data as $actualite)
      @if ($actualite->type =='radio1')
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="{{ asset('storage/' . $actualite->photo) }}" alt="Publication Image"  width='500' height="250">
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>
          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>{{$actualite->titre}} </strong></h4>
            <p class="text-muted">
                @php $d = Str::limit($actualite->description, 200) ; @endphp
                {{$d}} <br>
                <a href="{{ route('media-details', ['idMedia' => $actualite->id]) }}" class="btn btn-primary mt-4">Voir plus</a>
            </p>
          </div>
        </div>
        @endif
        @endforeach
      </section>
     
      
      <section class="text-center">
        <h4 class="mb-5"><strong>Les Actualités</strong></h4>
        <div class="row">
        @foreach ($data as $actualite)
          @if ($actualite->type =='radio1')
          <a href="{{ route('media-details', ['idMedia' => $actualite->id]) }}" class="col-lg-4 col-md-12 mb-4 text-decoration-none">
          <div >
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <div>
                  <img src="{{ asset('storage/' . $actualite->photo) }}" width="100%" height="200"/>
                </div>
              </div>
              <div class="card-body">
                @php $d = Str::limit($actualite->titre, 100) ; @endphp
                <h5 class="card-title">{{$d}}</h5>
                <p class="card-text text-dark">
                @php $d = Str::limit($actualite->description, 200) ; @endphp
                {{$d}}
                </p>
              </div>
            </div>
          </div>
          </a>
          @endif
        @endforeach
      <hr class="my-5" />
    </div>
  </main>
    @include('partitions.footer')
</body>
</html>