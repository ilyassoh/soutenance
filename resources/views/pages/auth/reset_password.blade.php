<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <title>CAC | Reset Password</title>
</head>
<body>
    <!-- include header  -->
    @include('../partitions.header')

    <!-- Formulaire de connexion  -->
    <div class="container mt-2">
        <div class="row">
            <div class="text-center">
                <img src="{{url('imgs/cac.png')}}" width="200" class="d-inline-block align-top rounded-3" alt="Bootstrap" loading="lazy">
            </div>
            <div class="col-md-3"></div>
            @if(Session::has('password'))
                <form class="col-md-6" action="{{route('rp')}}" method="POST">
                    @csrf
                    <h3 class="text-center">Reset Password !</h1>
                    <!-- Email input -->
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    <div class="my-2">
                        <label for="password" class="form-label fw-bold ms-3">New Password : </label>
                        <input type="password" class="form-control border border-dark" id="password" aria-describedby="password" name="password" value="{{old('password')}}">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="my-2">
                        <label for="password_confirmation" class="form-label fw-bold ms-3">Confirmer New Password : </label>
                        <input type="password" class="form-control border border-dark" id="password_confirmation" aria-describedby="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}">
                        <span class="text-danger">@error('password_confirmation') {{$message}} @enderror</span>
                    </div>
                    <input type="email" id="code" class="form-control" name="email" value="{{ session('email') }}" style="display:none;"  required/>
                    <!-- Submit button -->
                    <div class="row text-center">
                        <div class="col-md-4"></div><br>
                        <button type="submit" class="col-md-4 btn btn-primary btn-block mb-2">Valider</button>
                        <div class="col-md-4"></div>
                    </div>
                </form>
            @elseif(Session::has('success'))
            <form class="col-md-4" action="{{route('vcm')}}" method="POST">
                @csrf
                @if(Session::has('invalideCode'))
                    <div class="alert alert-danger">{{session('invalideCode')}}</div>
                @endif
                @if(Session::has('emailNotVerified'))
                    <div class="alert alert-danger">{{session('emailNotVerified')}}</div>
                @endif
                @if(Session::has('invalideEmail'))
                    <div class="alert alert-danger">{{session('invalideEmail')}}</div>
                @endif
                <!-- Email input -->
                <div class="form-outline mb-2">
                    <label class="form-label fw-bold ms-2" for="code">Entrer le Code de validation : </label>
                    <input type="text" id="code" class="form-control" name="code" value="{{old('code')}}"  required/>
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <input type="email" id="code" class="form-control" name="email" value="{{ session('email') }}" style="display:none;"  required/>
                <!-- Submit button -->
                <div class="row text-center mt-5">
                    <div class="col-md-4"></div>
                    <button type="submit" class="col-md-4 btn btn-primary btn-block mb-2">Valider</button>
                    <div class="col-md-4"></div>
                </div>
            </form>
            @else
            <form class="col-md-6" action="{{route('oublier-mp')}}" method="POST">
                @csrf
                <h3 class="text-center">Reset Password !</h1>
                <!-- Email input -->
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <div class="form-outline mb-2">
                    <label class="form-label fw-bold ms-2" for="email">Email Académique : </label>
                    <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control border border-dark" />
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <!-- Submit button -->
                <div class="row text-center">
                    <div class="col-md-4"></div><br>
                    <button type="submit" class="col-md-4 btn btn-primary btn-block mb-2">Valider</button>
                    <div class="col-md-4"></div>
                </div>
            </form>
            @endif
        </div>
    </div>
    
    
</body>
</html>