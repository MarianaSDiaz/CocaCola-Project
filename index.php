<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="This is the site of Coca-Cola" />
		<meta name="keywords" content="drink, soda, cocacola" />
		<title>Inicio Coca Cola</title>
		<link
		href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
		rel="stylesheet"
		/>
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
					<a href="#inicio">Inicio</a>
					<a href="#nosotros">Nosotros</a>
					<a href="#servicios">Servicios</a>
					<a href="#galeria">Galería</a>
					<a href="#contactenos">Contactenos</a>
				</nav>
				<a href="#" class="hamb"><i class="fas fa-bars"></i></a>
			</div>
		</header>
		<main>
			<section id="inicio">
				<img src="./img/bannerprincipal.jpg" alt="" />
				<div class="bloque-inicio">
					<h1>Bienvenidos a Coca-Cola</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					<a href="#nosotros" class="boton boton-rojo">Ver más</a>
				</div>
			</section>
			<section id="nosotros" class="seccion">
				<div class="container">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Necessitatibus, nam! Suscipit magni provident esse quibusdam eaque
						eos, ducimus in dicta, nam sapiente aliquid quo voluptate eum vero
						iure consequatur eius?
					</p>
				</div>
			</section>
			<section id="servicios" class="seccion">
				<div class="container">
					<div class="row">
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="./img/servicio1.jpg" alt="" />
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 1</h3>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit.
										Fugit dolor perferendis earum itaque ratione ipsam facilis
										exercitationem totam quae necessitatibus, ex rem quo neque
										laborum similique at in tempore. Consectetur!
									</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
								</div>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="./img/servicio2.jpg" alt="" />
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 2</h3>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit.
										Fugit dolor perferendis earum itaque ratione ipsam facilis
										exercitationem totam quae necessitatibus, ex rem quo neque
										laborum similique at in tempore. Consectetur!
									</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
								</div>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="./img/servicio3.jpg" alt="" />
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 3</h3>
									<p>
										Lorem ipsum dolor sit, amet consectetur adipisicing elit.
										Fugit dolor perferendis earum itaque ratione ipsam facilis
										exercitationem totam quae necessitatibus, ex rem quo neque
										laborum similique at in tempore. Consectetur!
									</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="galeria">
				<div class="container-fluid">
					<div class="row">
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="./img/servicio1.jpg" alt="" />
								<h4>Imagen 1</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="./img/servicio2.jpg" alt="" />
								<h4>Imagen 2</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="./img/servicio3.jpg" alt="" />
								<h4>Imagen 3</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="./img/servicio1.jpg" alt="" />
								<h4>Imagen 4</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="./img/servicio2.jpg" alt="" />
								<h4>Imagen 5</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="./img/servicio3.jpg" alt="" />
								<h4>Imagen 6</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="contactenos" class="seccion">
				<iframe width="520" height="400" frameborder="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20C%C3%B3rdoba+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
				</iframe>
				<div class="container-fluid">
					<div class="row">
						<div class="columna columna-33 columna-mobile-100 empujar-66 empujar-mobile-0 sinpadding-mobile">
							<form action="index.php" method="post">
								<div class="form-block">
									<input type="text" name="nombre" class="form-control" placeholder="Nombre"/>
								</div>
								<div class="form-block">
									<input type="email" name="email" class="form-control" placeholder="Email"/>
								</div>
								<div class="form-block">
									<textarea name="mensaje" placeholder="Mensaje"></textarea>
								</div>
								<div class="form-block bloque-ultimo">
									<input type="submit" class="boton boton-negro" value="Enviar"/>
								</div>
								<?php
									if ($_SERVER["REQUEST_METHOD"] == "POST") {
										$nombre = $_POST["nombre"] ;
										$email = $_POST["email"] ;
										$mensaje = $_POST["mensaje"] ;

										if (isset($nombre)) {
											if (isset($email)) {
												if (isset($mensaje)) {
													$paracorreo = "maruuus.95@gmail.com";
													$asunto = "test correo";
													$mensaje = "Hola Mundo";
													$tucorreo = "From: maruuus.95@gmail.com";
													mail($paracorreo,$asunto,$mensaje,$tucorreo);
												?>
													<p>Envio exitoso</p>
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
		<footer class="seccion">
			<div class="container">
				<div class="row">
					<div class="columna columna-25 columna-mobile-100">
						<img src="./img/logo-blanco.png" alt="" class="logo-footer" />
						<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						Consequatur perspiciatis minus ea accusantium cum.
						</p>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>Temas relacionados</h3>
						<ul>
							<li>
								<a href="#">Tema1</a>
							</li>
							<li>
								<a href="#">Tema2</a>
							</li>
							<li>
								<a href="#">Tema3</a>
							</li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>Datos de contactos</h3>
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
					<div class="columna columna-25 columna-mobile-100">
						<h3>Redes sociales</h3>
						<ul class="redes">
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
			<div class="barra-footer">&copy; Derechos reservados - 2021</div>
		</footer>
		<script src="./js/Jquery.js"></script>
		<script src="./js/funciones.js"></script>
	</body>
</html>
