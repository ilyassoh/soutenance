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
    <link rel="stylesheet" href="{{URL('css/media.css')}}">
    <link rel="stylesheet" href="{{URL('css/header.css')}}">
    <title>CAC</title>
</head>
<body>
        @include('partitions.header')
        <script>
            document.getElementById('media').setAttribute('id','activeLink')
        </script>
      <div >
           <div class="firstMedia_img" width="150px" >  
		  <span >
		  <button  id="btn-media" type="button" class="btn btn-light">media</button>
		  </span>   
           </div>
      </div>

 <section class="gallery-block cards-gallery">
	    <div class="container">
	        <div class="heading">
	          <h2>MEDIA</h2>
	        </div>
	        <div class="row">
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="../img/image1.jpg">
	                		<img src="{{URL('imgs/actualite1.jpg')}}"  alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
						<a class="lightbox" href="../img/image2.jpg">
		                	<img src="{{URL('imgs/actualite1.jpg')}}" alt="Card Image" class="card-img-top">
		                </a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="../img/image3.jpg">
	                		<img src="{{URL('imgs/actualite1.jpg')}}" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="../img/image4.jpg">
	                		<img src="{{URL('imgs/actualite1.jpg')}}" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="../img/image5.jpg">
	                		<img src="{{URL('imgs/actualite1.jpg')}}" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="../img/image6.jpg">
	                		<img src="{{URL('imgs/actualite1.jpg')}}" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    
	        
	        <div class="row">
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="../img/image1.jpg">
	                		<img src="{{URL('imgs/actualite1.jpg')}}" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
						<a class="lightbox" href="../img/image2.jpg">
		                	<img src="{{URL('imgs/actualite1.jpg')}}" alt="Card Image" class="card-img-top">
		                </a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="../img/image3.jpg">
	                		<img src="{{URL('imgs/actualite1.jpg')}}" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                        <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
	                    </div>
	                </div>
	            </div>
	                 
	        
</div>
    </section>
  
   <script>
        baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
    </script>




<!-- les images comme gallery -->

<div class="container ">
<div class="heading" id="pictures">
	      <h2>Our labos pictures</h2>
  </div>
 <div class="row">
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
            <img  src="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  alt=""> 
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"  class="fancybox" rel="ligthbox">
            <img  src="https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid"  alt="">
        </a>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
            <img  src="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
            <img  src="https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
            <img  src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
            <img  src="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
            <img  src="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid "  alt="">
        </a>
    </div>
    
     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
            <img  src="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid "  alt="">
        </a>
    </div>
     
 </div>
</div>

        @include('partitions.footer')
</body>
 </html>