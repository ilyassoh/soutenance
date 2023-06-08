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
            <h3 class="title">Let's get in touch</h3>
            <p class="text"> Contact us with the following details. and fillup the form with the details. </p>
            <div class="info">
                <div class="social-information"> <i class="fa fa-map-marker"></i>
                    <p>NPM,NY,USA</p>
                </div>
                <div class="social-information"> <i class="fa fa-envelope-o"></i>
                    <p>contact@bbbootstrap.com</p>
                </div>
                <div class="social-information"> <i class="fa fa-mobile-phone"></i>
                    <p>+1 989 989 9898 </p>
                </div>
            </div>
            <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons text-center"> 
                    <a href="#"><i class="fa-brands fa-square-facebook fs-3 mx-2"></i></a> 
                    <a href="#"><i class="fa-brands fa-twitter fs-3 mx-2"></i></a> 
                    <a href="#"><i class="fa-brands fa-instagram fs-3 mx-2"></i></a> 
                    <a href="#"><i class="fa-brands fa-linkedin-in fs-3 mx-2"></i></a> 
                </div>
            </div>
        </div>
        <div class="contact-info-form"> <span class="circle one"></span> <span class="circle two"></span>
            <form action="#" onclick="return false;" autocomplete="off">
                <h3 class="title">Contact us</h3>
                <div class="social-input-containers">
                    <input type="text" name="name" class="input" placeholder="Name" /> 
                </div>
                <div class="social-input-containers"> 
                    <input type="email" name="email" class="input" placeholder="Email" />
                </div>
                <div class="social-input-containers"> 
                    <input type="tel" name="phone" class="input" placeholder="Phone" />  
                </div>
                <div class="social-input-containers textarea"> 
                    <textarea name="message" class="input" placeholder="Message"></textarea>
                </div> 
                <button class="btn btn-danger">Envoyer</button>
            </form>
        </div>
    </div>
</div>   

@include('partitions.footer')


</body>
</html>