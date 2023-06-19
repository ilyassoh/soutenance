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




  <div class="accordion" id="accordionPanelsStayOpenExample">

    <!-- radio button groups -->
    <div class="mt-4 d-flex justify-content-center">
      <div class="btn-group " role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check " name="btnradio" id="btnradio1" autocomplete="off" checked="">
        <label class="btn btn-outline-primary" for="btnradio1" onclick="afficheLab('1')" style="border-radius: 5px;  margin:10px">FSSM</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio2" onclick="afficheLab('2')" style="border-radius: 5px;  margin:10px">CIM</label>
      </div>
    </div>
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
      <!-- <h2 class="mb-4" id="title"></h2> -->
      <div id="lab1">
        <section id="work" class="portfolio-mf sect-pt0 route">
          <div class="container">
            <div class="row">
              @foreach($machine as $row)
              @if( $row['local'] =='Local 1')
              @php
                $var = $row['rep_images'];
                $imagePath = str_replace('\\', '/', $var);
                $imagePath = preg_replace('/\/+/', '/', $imagePath);
                $imagePath = trim($imagePath, "[]");
                $imagePath = trim($imagePath, '""');
              @endphp
              <!-------------------- FSSM category ----------------------->
              <div class="col-md-3">
                <div class="work-box" style="border: 2px; border-color:#D3D3D3; border-style: solid; border-radius:5px;">
                  <a href="{{URL('storage/'.$imagePath)}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="{{URL('storage/'.$imagePath)}}" alt="" class="" height="250">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h3 class="w-title">
                          @php
                            $d = Str::limit($row['designation'], 10);
                          @endphp
                          {{$d}}
                        </h3>
                        <div class="w-more">
                          <span class="w-ctegory">{{$row['label']}}</span>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="w-like">
                          <a href="{{route('machine-details', ['idMachine' => $row['id']])}}"> <span class="bi bi-plus-circle"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endif
              @endforeach
            </div>
        </section>
      </div>
      <!------------------------ lab2 ----------------------->
      <div id="lab2" style="display: none;">
        <section id="work" class="portfolio-mf sect-pt0 route">
          <div class="container">
            <div class="row">
              <!-------------------- CIM category ----------------------->
              @foreach($machine as $row)
              @if( $row['local'] =='Local 2')
              <img src="{{URL('storage/'.$imagePath)}}" alt="...">
              <div class="col-sm-3">
                <div class="work-box" style="border: 2px; border-color:#D3D3D3; border-style: solid; border-radius:5px;">
                  <a href="{{URL('imgs/machie_1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                    <div class="work-img">
                      <img src="{{URL('imgs/machie_3.jpg')}}" alt="" class="img-fluid">
                    </div>
                  </a>
                  <div class="work-content">
                    <div class="row">
                      <div class="col-sm-8">
                        <h2 class="w-title"> {{$row['label']}}</h2>
                        <div class="w-more">
                          <span class="w-ctegory"> {{$row['designation']}}</span> / <span class="w-date">18 Sep. 2018</span>
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
              @endif
              @endforeach
            </div>
        </section>
      </div>


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