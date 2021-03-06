<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="This is the site of Coca-Cola" />
		<meta name="keywords" content="drink, soda, cocacola" />
		<title>Inicio Coca Cola</title>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"/>
		<link rel="stylesheet" href="./css/normalize.css" />
		<link rel="stylesheet" href="./css/style.css" />
		<link rel="stylesheet" href="./css/media.css" />
		<script src="https://kit.fontawesome.com/04bfb0aab2.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<div class="container">
				<a href="index.html">
					<img src="./img/logo.svg" class="logo" />
				</a>
				<nav>
					<a href="#home">Home</a>
					<a href="#aboutUs">About Us</a>
					<a href="#services">Services</a>
					<a href="#gallery">Gallery</a>
					<a href="#contactUs">Contact Us</a>
				</nav>
				<a href="#" class="hamb"><i class="fas fa-bars"></i></a>
			</div>
		</header>
		<main>
			<section id="home">
				<img src="./img/bannerprincipal.jpg" alt="" />
				<div class="block-home">
					<h1>Wellcome to Coca-Cola</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					<a href="#aboutUs" class="button button-red">See more</a>
				</div>
			</section>
			<section id="aboutUs" class="section">
				<div class="container">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Necessitatibus, nam! Suscipit magni provident esse quibusdam eaque
						eos, ducimus in dicta, nam sapiente aliquid quo voluptate eum vero
						iure consequatur eius?
					</p>
				</div>
			</section>
			<section id="services" class="section">
				<div class="container">
					<div class="row">
						<div class="column column-33 column-mobile-100">
							<div class="block-service">
								<div class="block-img-service square-perfect">
									<img src="./img/servicio1.jpg" alt="" />
								</div>
								<div class="block-content-service">
									<h3>Service 1</h3>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit.
										Fugit dolor perferendis earum itaque ratione ipsam facilis
										exercitationem totam quae necessitatibus, ex rem quo neque
										laborum similique at in tempore. Consectetur!
									</p>
									<a href="#" class="button button-white">Ver m??s</a>
								</div>
							</div>
						</div>
						<div class="column column-33 column-mobile-100">
							<div class="block-service">
								<div class="block-img-service square-perfect">
									<img src="./img/servicio2.jpg" alt="" />
								</div>
								<div class="block-content-service">
									<h3>Service 2</h3>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit.
										Fugit dolor perferendis earum itaque ratione ipsam facilis
										exercitationem totam quae necessitatibus, ex rem quo neque
										laborum similique at in tempore. Consectetur!
									</p>
									<a href="#" class="button button-white">See more</a>
								</div>
							</div>
						</div>
						<div class="column column-33 column-mobile-100">
							<div class="block-service">
								<div class="block-img-service square-perfect">
									<img src="./img/servicio3.jpg" alt="" />
								</div>
								<div class="block-content-service">
									<h3>Service 3</h3>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit.
										Fugit dolor perferendis earum itaque ratione ipsam facilis
										exercitationem totam quae necessitatibus, ex rem quo neque
										laborum similique at in tempore. Consectetur!
									</p>
									<a href="#" class="button button-white">See more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="gallery">
				<div class="container-fluid">
					<div class="row">
						<div class="column-33 column-mobile-50">
							<div class="square-perfect">
								<img src="./img/servicio1.jpg" alt="" />
								<h4>Image 1</h4>
							</div>
						</div>
						<div class="column-33 column-mobile-50">
							<div class="square-perfect">
								<img src="./img/servicio2.jpg" alt="" />
								<h4>Image 2</h4>
							</div>
						</div>
						<div class="column-33 column-mobile-50">
							<div class="square-perfect">
								<img src="./img/servicio3.jpg" alt="" />
								<h4>Image 3</h4>
							</div>
						</div>
						<div class="column-33 column-mobile-50">
							<div class="square-perfect">
								<img src="./img/servicio1.jpg" alt="" />
								<h4>Image 4</h4>
							</div>
						</div>
						<div class="column-33 column-mobile-50">
							<div class="square-perfect">
								<img src="./img/servicio2.jpg" alt="" />
								<h4>Image 5</h4>
							</div>
						</div>
						<div class="column-33 column-mobile-50">
							<div class="square-perfect">
								<img src="./img/servicio3.jpg" alt="" />
								<h4>Image 6</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="contactUs" class="section">
				<iframe width="520" height="400" frameborder="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20C%C3%B3rdoba+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
				</iframe>
				<div class="container-fluid">
					<div class="row">
						<div class="column column-33 column-mobile-100 push-66 push-mobile-0 sinpadding-mobile">
							<form action="" method="post">
								<div class="form-block">
									<input type="text" name="name" class="form-control" placeholder="Name"/>
								</div>
								<div class="form-block">
									<input type="email" name="email" class="form-control" placeholder="Email"/>
								</div>
								<div class="form-block">
									<textarea name="mesage" placeholder="Mesage"></textarea>
								</div>
								<div class="form-block block-last">
									<input type="submit" class="button button-black" value="Submit"/>
								</div>
								<?php
									if ($_SERVER["REQUEST_METHOD"] == "POST") {
										$name = $_POST["name"] ;
										$email = $_POST["email"] ;
										$mesage = $_POST["mesage"] ;

										if (isset($name)) {
											if (isset($email)) {
												if (isset($mesage)) {
													$to = "maruuus.95@gmail.com";
													$subject = "mail test";
													$mesage = "Hello World!";
													$yourmail = "From: maruuus.95@gmail.com";
													mail($to,$subject,$mesage,$yourmail);
												?>
													<p>successful shipment</p>
												<?php	
												}
											}
										}
									}
								?>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer class="section">
			<div class="container">
				<div class="row">
					<div class="column column-25 column-mobile-100">
						<img src="./img/logo-blanco.png" alt="" class="logo-footer" />
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Consequatur perspiciatis minus ea accusantium cum.
						</p>
					</div>
					<div class="column column-25 column-mobile-100">
						<h3>Related topics</h3>
						<ul>
							<li>
								<a href="#">Topic1</a>
							</li>
							<li>
								<a href="#">Topic2</a>
							</li>
							<li>
								<a href="#">Topic3</a>
							</li>
						</ul>
					</div>
					<div class="column column-25 column-mobile-100">
						<h3>Contact Information</h3>
						<ul>
							<li>
								<a href="#">maruuus.95@gmail.com</a>
							</li>
							<li>
								<a href="#">3416141516</a>
							</li>
							<li>
								<a href="#">Calle 123, Rosario</a>
							</li>
						</ul>
					</div>
					<div class="column column-25 column-mobile-100">
						<h3>Social Networks</h3>
						<ul class="networks">
							<li>
								<a href="#">
									<i class="fab fa-facebook-square"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter-square"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-instagram-square"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="barra-footer">&copy; Rights reserved - 2021</div>
		</footer>
		<script src="./js/Jquery.js"></script>
		<script src="./js/funciones.js"></script>
	</body>
</html>