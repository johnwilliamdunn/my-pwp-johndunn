<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--		adding custom font-->
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
<!--		font awesome-->
		<script src="https://kit.fontawesome.com/91ee8a26ec.js"></script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--		FancyBox script-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--		Bootstrap JS-->
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--		FancyBox 3-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		<link rel="stylesheet" href="css/style.css">
		<title>Lucy's Life</title>
	</head>
	<body>
<!--		adding Page Header-->
		<header class="bg-primary py-2">
			<div class="container">
				<!-- Image and text -->
				<nav class="navbar navbar-dark">
					<a class="navbar-brand" href="#">
						<img src="images/cartoonLu.jpg" width="100" height="100" class="d-inline-block align-top" alt="cartoon lu">
						Lucy's Life
					</a>
				</nav>

			</div>
		</header>
<!--		adding content section-->
		<section class="py-5">
			<div class="container">
				<div class="card-body">
					<div class="card-text">
						Lucy's Life of Leisure
						<p>Mr. Worf, you do remember how to fire phasers? In all trust, there is the possibility for betrayal. They were just sucked into space. Could someone survive inside a transporter buffer for 75 years? I'd like to think that I haven't changed those things, sir. A surprise party? Mr. Worf, I hate surprise parties. I would *never* do that to you. Maybe if we felt any human loss as keenly as we feel one of those close to us, human history would be far less bloody. I think you've let your personal feelings cloud your judgement. Now we know what they mean by 'advanced' tactical training. I suggest you drop it, Mr. Data. I am your worst nightmare! But the probability of making a six is no greater than that of rolling a seven. You bet I'm agitated! I may be surrounded by insanity, but I am not insane.</p>
					</div>
				</div>
			</div>
		</section>
<!--		adding gallery section-->
		<section class="py-5">
			<div class="container">
				<div class="row">
					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="images/dogcat-full.jpg" data-fancybox="gallery" data-caption="Lucy 001">
							<img src="images/dog-cat-tn.jpg" alt="Lucy 001" class="img-fluid">
						</a>
					</div>
					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="images/dogshadow-full.jpg" data-fancybox="gallery" data-caption="Lucy 002">
							<img src="images/dogshadow-tn.jpg" alt="Lucy 002" class="img-fluid">
						</a>
					</div>
					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="images/dogsun-full.jpg" data-fancybox="gallery" data-caption="Lucy 003">
							<img src="images/dogsun-tn.jpg" alt="Lucy 003" class="img-fluid">
						</a>
					</div>
					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="images/dogsand-full.jpg" data-fancybox="gallery" data-caption="Lucy 004">
							<img src="images/dogsand-tn.jpg" alt="Lucy 004" class="img-fluid">
						</a>
					</div>
					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="images/dogcovers-full.jpg" data-fancybox="gallery" data-caption="Lucy 005">
							<img src="images/dogcovers-tn.jpg" alt="Lucy 005" class="img-fluid">
						</a>
					</div>
					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="images/dogtree-full.JPG" data-fancybox="gallery" data-caption="Lucy 006">
							<img src="images/dogtree-tn.JPG" alt="Lucy 006" class="img-fluid">
						</a>
					</div>
					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="images/dognose-full.JPG" data-fancybox="gallery" data-caption="Lucy 007">
							<img src="images/dognose-tn.JPG" alt="Lucy 007" class="img-fluid">
						</a>
					</div>
					<!-- begin gallery item -->
					<div class="col-6 col-lg-3 mb-3">
						<a href="images/dogears-full.jpg" data-fancybox="gallery" data-caption="Lucy 008">
							<img src="images/dogears-tn.jpg" alt="Lucy 008" class="img-fluid">
						</a>
					</div>
				</div>
			</div>
			</section>
<!--		contact form sectiobn-->
		<section class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 offset-lg-4">
						<form id="Lucys-contact-form" action="php/mailer.php" method="post">
							<div class="form-group">
								<label for="contactLucy">Lucy <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-gropu-text"></span>
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="contactLucy" name="contactLucy" placeholder="Lucy">
								</div>
							</div>
							<div class="form-group">
								
							</div>
					</div>
				</div>
			</div>
		</section>

	</body>
</html>