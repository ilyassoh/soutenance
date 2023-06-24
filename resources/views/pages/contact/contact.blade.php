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
    <link rel="stylesheet" href="{{URL('css/contact.css')}}">
    <link rel="stylesheet" href="{{URL('css/header.css')}}">
    <title>CAC | Contact</title>
</head>
<body>



    @include('partitions.header')


    <script>
        document.getElementById('contact').setAttribute('id','activeLink')
    </script>


<div class="container">
    <div class="form">
        <div class="contact-info">
            @if(session('success'))
                <span class="alert alert-success text-center mb-5">
                    {{ session('success') }}
                </span>
            @endif
            <h3 class="title mt-5">Countactez-Nous</h3>
            <p class="text">Veuillez nous contacter en utilisant les coordonnées suivantes et remplir le formulaire avec les informations demandées  </p>
            <div class="info">
                <div class="social-information"> <i class="fa fa-map-marker"></i>
                    <p>{{$parametres[0]['location']}}</p>
                </div>
                <div class="social-information"> <i class="fa-solid fa-envelope"></i>
                    <p>{{$parametres[0]['Contact_email']}}</p>
                </div>
                <div class="social-information"> <i class="fa fa-mobile-phone"></i>
                    <p>{{$parametres[0]['Contact_Number']}}</p>
                </div>
            </div>
        </div>
        <div class="contact-info-form"> <span class="circle one"></span> <span class="circle two"></span>
            <form action="{{ route('recevoirEmail') }}" method="POST">
                @csrf
                <h3 class="title">Votre Message</h3>
                <div class="social-input-containers">
                    <input type="text" name="name" class="input text-light" placeholder="Name" required/> 
                </div>
                <div class="social-input-containers"> 
                    <input type="email" name="email" class="input" placeholder="Email" required/>
                </div>
                <div class="social-input-containers"> 
                    <input type="tel" name="phone" class="input" placeholder="Phone" required/>  
                </div>
                <div class="social-input-containers textarea"> 
                    <textarea name="message" class="input" placeholder="Message" required></textarea>
                </div> 
                <button class="btn btn-danger" type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</div>   

@include('partitions.footer')


</body>
</html>