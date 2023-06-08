
<!-- Slide d'entrée  -->
<div class="carsoul">
    <h1>CAC</h1>
    <p><b>C</b>entre d'<b>A</b>nalyse et de <b>C</b>aractérisation</p>
    <span>Université Cadi Ayyad</span><br>
    <span>Centre d'Innovation</span><br><br>
    <button class="btn btn-primary">Demande</button>
</div>

<!-- Plus Utilisables Machines  -->
<div class="container-fluid row text-center mt-5">

  <div class="col-md-1"></div>
  @for ($i=count($data2)-1; $i>count($data2)-2;  $i--)
  <div class="col-md-3 mt-5 mb-3">
    <img src="{{URL('imgs/machine.png')}}" alt="Machine" width="150px"><br>
    <h2>{{$data2[$i]->label}}</h2>
    <p>
      {{$data2[$i]->designation}}
    </p>
    <button class="btn btn-primary px-3 fw-bold">Details </button>
  </div>
  @endfor

  @for ($i=count($data2)-2; $i>count($data2)-3;  $i--)
  <div class="col-md-4 mb-3">
    <img src="{{URL('imgs/machine.png')}}" alt="Machine" width="150px"><br>
    <h2>{{$data2[$i]->label}}</h2>
    <p> 
    {{$data2[$i]->designation}}
    </p>
    <button class="btn btn-primary px-3 fw-bold">Details </button>
  </div>
@endfor
  @for ($i=count($data2)-2; $i>count($data2)-3;  $i--)
  <div class="col-md-3 mt-5 mb-3">
    <img src="{{URL('imgs/machine.png')}}" alt="Machine" width="150px"><br>
    <h2>{{$data2[$i]->label}}</h2>
    <p>
    {{$data2[$i]->designation}}
    </p>
    <button class="btn btn-primary px-3 fw-bold">Details </button>
  </div>
  @endfor
  <div class="col-md-1"></div>
</div>





<!-- Publiques Publications  -->
<div class="container col-xxl-8 px-4 py-5">

@for ($i=count($data1)-2; $i>count($data1)-3;  $i--)
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div id="pecB" class="col-10 col-sm-8 col-lg-6">
      <img src="{{URL('imgs/actual.jpg')}}" class="d-block mx-lg-auto img-fluid rounded-1" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <!-- Exemple de recherche  -->
    <div class="col-lg-6">
      <h3 class="display-5 fw-bold lh-1 mb-3">{{$data1[$i]->titre}}</h3>
      <p class="lead" style="text-indent : 20px;">
      {{$data1[$i]->description}}
      </p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voit Plus</button>
      </div>
    </div>
  </div>

@endfor


  @for ($i=count($data1)-1 ; $i>count($data1)-2;  $i--)
  <div class="row flex-lg-row-wrap align-items-center g-5 py-5">
    <div id="pecB" class="col-10 col-sm-8 col-lg-6">
      <img src="{{URL('imgs/actual.jpg')}}" class="d-block mx-lg-auto img-fluid rounded-2 ml" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <!-- Exemple d'actualité  -->
    <div class="col-lg-6">
      <h3 class="display-5 fw-bold lh-1 mb-3">{{$data1[$i]->titre}} </h3>
      <p class="lead" style="text-indent : 20px;">
      {{$data1[$i]->description}}
      </p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voir Plus</button>
      </div>
    </div>
  </div>
  @endfor
</div>

