
<!-- Slide d'entrée  -->
<div class="carsoul">
    <h1>CAC</h1>
    <p><b>C</b>entre d'<b>A</b>nalyse et de <b>C</b>aractérisation</p>
    <span>Université Cadi Ayyad</span><br>
    <span>Centre d'Innovation Marrakech</span><br><br>
    <a href="{{ route('profile') }}" class="btn btn-primary">Demande</a>
</div>

@if (count($data2)>0)
<div class="container text-center mt-5 justify-content-center">
  <div class="row justify-content-center">
    @for ($i=count($data2)-1; $i>count($data2)-4;  $i--)
      <div class="col-md-4">
        <img src="{{URL('imgs/machine.png')}}" alt="Machine" width="150px"><br>
        <h2>{{$data2[$i]->label}}</h2>
        <p>
          @php 
            $d = Str::limit($data2[$i]->designation, 28) ;
          @endphp
          {{$d}}
        </p>
        <a class="btn btn-primary px-3 fw-bold" href="{{route('machine-details', ['idMachine' => $data2[$i]['id']])}}">Voir plus </a>
      </div>
    @endfor
  </div>
</div>
@endif

@if (count($data1)>0)
<div class="container mt-5 justify-content-center">
  @php $i=2; @endphp
  @foreach ($data1 as $actualite)
    @if ($actualite->type =='radio1' && $i<4)
      @if($i%2==0)
        <div class="row mt-5">
          <div height="100" width="300" class="col-md-6">
            <img src="{{ asset('storage/' . $actualite->photo) }}" class="img-fluid rounded-5"/>
          </div>
          <div class="col-md-6 mt-5">
            <h5 class="card-title">{{$actualite->titre}}</h5>
            <p class="card-text">
              @php $d = Str::limit($actualite->description, 200) ; @endphp
              {{ $d }}
            </p>
            <a href="{{ route('media-details', ['idMedia' => $actualite->id]) }}" class="btn btn-primary mt-4">Voir plus</a>
          </div>
        </div>
        @php $i++; @endphp
      @else
      <div class="row mt-5">
        <div class="col-md-6 mt-4">
          <h5 class="card-title">{{$actualite->titre}}</h5>
          <p class="card-text">
              @php $d = Str::limit($actualite->description, 200) ; @endphp
              {{ $d }}
              <a href="{{ route('media-details', ['idMedia' => $actualite->id]) }}" class="btn btn-primary mt-4">Voir plus</a>
          </p>
        </div>
        <div height="100" width="300" class="col-md-6">
          <img src="{{ asset('storage/' . $actualite->photo) }}" class="img-fluid rounded-5"/>
        </div>
      </div>
        @php $i++; @endphp
      @endif
    @endif
  @endforeach
  </div>
@endif

