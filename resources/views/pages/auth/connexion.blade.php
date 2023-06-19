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
    <title>CAC | Login</title>
</head>
<body>

    <!-- include header  -->
    @include('../partitions.header')

    <!-- Formulaire de connexion  -->
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-3"></div>
            <form class="col-md-6" action="{{route('connexion-chercheur')}}" method="POST">
                @csrf
                <div class="text-center">
                    <img src="{{url('imgs/cac.png')}}" width="200" class="d-inline-block align-top rounded-3" alt="Bootstrap" loading="lazy">
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <!-- Email input -->
                <div class="form-outline mb-2">
                    <label class="form-label fw-bold ms-2" for="email">Email Académique : </label>
                    <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control border border-dark" />
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <!-- Password input -->
                <div class="form-outline mb-2">
                    <label class="form-label fw-bold ms-2" for="password">Mot de Passe : </label>
                    <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control border border-dark"/>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <!-- 2 column grid layout for inline styling -->
                <div class="row my-4">
                    <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31"/>
                            <label class="form-check-label" for="form2Example31"> Se souvenir de moi  </label>
                        </div>
                    </div>
                    <div class="col">
                    <!-- Simple link -->
                    <a href="{{route('page-oubli-mp')}}">Mot de passe oublié ?</a>
                    </div>
                </div>
                <!-- Submit button -->
                <div class="row text-center">
                    <div class="col-md-4"></div>
                    <button type="submit" class="col-md-4 btn btn-primary btn-block mb-2">Connexion</button>
                    <div class="col-md-4"></div>
                </div>
                <!-- Register buttons -->
                <div class="text-center">
                    <p>Nouveau Chercheur ? <a href="{{route('inscription')}}">Inscription</a></p>
                </div>
            </form>
            <div class="col-md-3"></div>
        </div>
    </div>
    
    
</body>
</html>