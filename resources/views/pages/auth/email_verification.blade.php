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
    <title>CAC | Verification Email</title>
</head>
<body>

    <!-- include header  -->
    @include('../partitions.header')
    
    <!-- Formulaire de connexion  -->
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-4"></div>
            <form class="col-md-4" action="" method="POST">
                <div class="text-center">
                    <img src="{{url('imgs/cac.png')}}" width="200" class="d-inline-block align-top rounded-3" alt="Bootstrap" loading="lazy">
                </div>
                <!-- Email input -->
                <div class="form-outline mb-2">
                    <label class="form-label fw-bold ms-2" for="form2Example1">Entrer le Code de validation : </label>
                    <input type="email" id="form2Example1" class="form-control"  required/>
                </div>
                <!-- Submit button -->
                <div class="row text-center mt-5">
                    <div class="col-md-4"></div>
                    <button type="button" class="col-md-4 btn btn-primary btn-block mb-2">Sign in</button>
                    <div class="col-md-4"></div>
                </div>
                <!-- Register buttons -->
                <div class="text-center mt-4">
                    <p>Pas de Message ? <a href="{{route('inscription')}}">Re_envoyer</a></p>
                </div>
            </form>
            <div class="col-md-4"></div>
        </div>
    </div>

    
</body>
</html>