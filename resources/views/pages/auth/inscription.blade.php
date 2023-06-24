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
    <title>CAC | Inscription</title>
</head>
<body>

    <!-- include header  -->
    @include('../partitions.header')
    
    <!-- Formulaire d'inscription  -->
    <div class="container mt-5">
        <form action="{{route('inscription-chercheur')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row text-center text-danger text-underline my-3">
                <h3>Inscription </h3>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-3 my-2">
                    <label for="nom" class="form-label fw-bold ms-3">Nom : </label>
                    <input type="text" class="form-control border border-dark" name="nom" value="{{old('nom')}}">
                    <span class="text-danger">@error('nom') {{$message}} @enderror</span>
                </div>
                <div class="col-md-3 my-2">
                    <label for="prenom" class="form-label fw-bold ms-3">Prénom : </label>
                    <input type="text" class="form-control border border-dark" name="prenom" value="{{old('prenom')}}">
                    <span class="text-danger">@error('prenom') {{$message}} @enderror</span>
                </div>
                <div class="col-md-4 my-2">
                    <label for="telephone" class="form-label fw-bold ms-3">Téléphone : </label>
                    <input type="phone" class="form-control border border-dark" name="telephone" value="{{old('telephone')}}">
                    <span class="text-danger">@error('telephone') {{$message}} @enderror</span>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-3 my-2">
                    <label for="email" class="form-label fw-bold ms-3">Email Académique : </label>
                    <input type="email" class="form-control border border-dark" id="email" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <div class="col-md-4 my-2">
                    <label for="image" class="form-label fw-bold ms-3">Image : </label>
                    <input type="file" class="form-control border border-dark" name="image" value="{{old('image')}}" placeholder="choisir votre image de profile">
                    <span class="text-danger">@error('image') {{$message}} @enderror</span>
                </div>
                <div class="col-md-3 my-2">
                    <label for="status" class="form-label fw-bold ms-3">Status : </label>
                    <select class="form-select border border-dark" aria-label="Default select example" name="status" value="{{old('status')}}">
                        <option selected>Votre Statut Académique</option>
                        <option value="Prof">Prof</option>
                        <option value="Etud_D">Etudiant : D</option>
                        <option value="Etud_M">Etudiant : M</option>
                        <option value="Etud_L">Etudiant : L</option>
                    </select>
                    <span class="text-danger">@error('statut') {{$message}} @enderror</span>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-3 my-2">
                    <label for="password" class="form-label fw-bold ms-3">Password : </label>
                    <input type="password" class="form-control border border-dark" id="password" aria-describedby="password" name="password" value="{{old('password')}}">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="col-md-3 my-2">
                    <label for="password_confirmation" class="form-label fw-bold ms-3">Confirmer Password : </label>
                    <input type="password" class="form-control border border-dark" id="password_confirmation" aria-describedby="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}">
                    <span class="text-danger">@error('password_confirmation') {{$message}} @enderror</span>
                </div>
                <div class="col-md-4 my-2">
                    <label for="encadrant" class="form-label fw-bold ms-3">Encadrant : </label>
                    <input type="text" class="form-control border border-dark" id="encadrant" aria-describedby="encadrant" name="encadrant" value="{{old('encadrant')}}">
                    <span class="text-danger">@error('encadrant') {{$message}} @enderror</span>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-3 my-2">
                    <label for="structure" class="form-label fw-bold ms-3">Structure : </label>
                    <select class="form-select border border-dark" aria-label="Default select example" name="structure" value="{{old('structure')}}">
                        <option selected>Votre Strucutre : </option>
                        @foreach ($structures as $structure)
                            <option value="{{ $structure->id }}">{{ $structure->intitule }}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">@error('structure') {{$message}} @enderror</span>
                    <label for="structure" class="form-label fw-bold ms-3">Etablissement : </label>
                    <select class="form-select border border-dark" aria-label="Default select example" name="etablissement" value="{{old('etablissement')}}">
                        <option selected>Votre Statut Académique</option>
                        <option value="" selected>Choisir</option>
                        <option value="fssm">FSSM</option>
                        <option value="fstg">FSTG</option>
                        <option value="ensam">ENSA-M</option>
                        <option value="encg">ENCG</option>
                        <option value="fsjes">FSJES</option>
                        <option value="fmpm">FMPM</option>
                        <option value="flshm">FLSHM</option>
                        <option value="ens">ENS</option>
                        <option value="ensas">ENSA Safi</option>
                        <option value="ests">EST Safi</option>
                        <option value="este">EST Essaouira</option>
                        <option value="fsjesk">FSJESK</option>
                        <option value="cim">CIM</option>
                        <option value="estk">ESTK</option>
                        <option value="fps">FPS</option>
                    </select>
                    <span class="text-danger">@error('etablissement') {{$message}} @enderror</span>
                </div>
                <div class="col-md-7 my-2 text-center">
                    <label for="biographie" class="form-label fw-bold ms-3">Biographie : </label>
                    <textarea class="form-control border border-dark" placeholder="Leave a comment here" id="floatingTextarea" name="biographie" rows="5" cols="30" value="{{old('biographie')}}"></textarea>
                    <span class="text-danger">@error('biographie') {{$message}} @enderror</span>
                </div>
            </div>
            <div class="row text-center my-4">
                <div class="col-md-5"></div>
                <button type="submit" class="col-md-2 btn btn-primary">S'inscrire</button>
                <div class="col-md-5"></div>
            </div>
        </form>
    </div>

    
</body>
</html>