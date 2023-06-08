<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="{{URL('css/recherches.css')}}">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<!------ Include the above in your HEAD tag ---------->
	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="{{URL('css/assets/css/style.css')}}" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<link rel="stylesheet" href="{{URL('css/recherches.css')}}">
	<link rel="stylesheet" href="{{URL('css/header.css')}}">
	<title>CAC</title>
</head>

<body>
	@include('partitions.header')

	<script>
		document.getElementById('recherches').setAttribute('id', 'activeLink')
	</script>

	<!-- partial:index.partial.html -->

	<section class="light">
		<div class="container py-2">
			<div class="h1 text-center text-dark" id="pageHeaderTitle">Les Recheches</div>

			<article class="postcard light red">
				<a class="postcard__img_link" href="#">
					<img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
				</a>
				<div class="postcard__text t-dark">
					<h1 class="postcard__title red"><a href="#">Titre de rechrche</a></h1>
					<div class="postcard__subtitle small">
						<time datetime="2020-05-25 12:00:00">
							<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
						</time>
					</div>
					<div class="postcard__bar"></div>
					<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
					<ul class="postcard__tagbox">
						<div class="">
							<div class="media">
								<img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png" alt="Generic placeholder image" style="max-width:50px">
								<div class="media-body">
									<h6 class="my-0 text-black d-block">Nom de checheur</h6>
									<small>Director of UI/UX</small>
								</div>
							</div>
						</div>
					</ul>
				</div>
			</article>
			<article class="postcard light red">
				<a class="postcard__img_link" href="#">
					<img class="postcard__img" src="https://picsum.photos/701/700" alt="Image Title" />
				</a>
				<div class="postcard__text t-dark">
					<h1 class="postcard__title red"><a href="#">Titre de rechrche</a></h1>
					<div class="postcard__subtitle small">
						<time datetime="2020-05-25 12:00:00">
							<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
						</time>
					</div>
					<div class="postcard__bar"></div>
					<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
					<ul class="postcard__tagbox">
						<div class="">
							<div class="media">
								<img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png" alt="Generic placeholder image" style="max-width:50px">
								<div class="media-body">
									<h6 class="my-0 text-black d-block">Nom de checheur</h6>
									<small>Director of UI/UX</small>
								</div>
							</div>
						</div>
					</ul>
				</div>
			</article>
			<article class="postcard light red">
				<a class="postcard__img_link" href="#">
					<img class="postcard__img" src="https://picsum.photos/800/800" alt="Image Title" />
				</a>
				<div class="postcard__text t-dark">
					<h1 class="postcard__title red"><a href="#">Titre de rechrche</a></h1>
					<div class="postcard__subtitle small">
						<time datetime="2020-05-25 12:00:00">
							<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
						</time>
					</div>
					<div class="postcard__bar"></div>
					<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
					<ul class="postcard__tagbox">
						<div class="">
							<div class="media">
								<img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png" alt="Generic placeholder image" style="max-width:50px">
								<div class="media-body">
									<h6 class="my-0 text-black d-block">Nom de checheur</h6>
									<small>Director of UI/UX</small>
								</div>
							</div>
						</div>
					</ul>
				</div>
			</article>
			<article class="postcard light red">
				<a class="postcard__img_link" href="#">
					<img class="postcard__img" src="https://picsum.photos/2000/2000" alt="Image Title" />
				</a>
				<div class="postcard__text t-dark">
					<h1 class="postcard__title red"><a href="#">Titre de rechrche</a></h1>
					<div class="postcard__subtitle small">
						<time datetime="2020-05-25 12:00:00">
							<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
						</time>
					</div>
					<div class="postcard__bar"></div>
					<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
					<ul class="postcard__tagbox">
						<div class="">
							<div class="media">
								<img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png" alt="Generic placeholder image" style="max-width:50px">
								<div class="media-body">
									<h6 class="my-0 text-black d-block">Nom de checheur</h6>
									<small>Director of UI/UX</small>
								</div>
							</div>
						</div>
					</ul>
				</div>
			</article>
		</div>
	</section>

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="{{URL('css/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
	<script src="{{URL('css/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{URL('css/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
	<script src="{{URL('css/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
	<script src="{{URL('css/assets/vendor/typed.js/typed.min.js')}}"></script>
	<script src="{{URL('css/assets/vendor/php-email-form/validate.js')}}"></script>

	<!-- Template Main JS File -->
	<script src="{{URL('css/assets/js/main.js')}}"></script>


	<!-- partial -->
	@include('partitions.footer')
</body>

</html>