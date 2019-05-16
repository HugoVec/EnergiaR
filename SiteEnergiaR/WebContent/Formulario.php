<DOCTYPE html>
<html>
	<head>
		<title>Energia Hidrogênio</title>
		<link rel="stylesheet" href="CSS/hidrogenio.css">
		<link rel="stylesheet" href="CSS/MenuHF.css">

		<style>


			.divForm {
				width: 30%;
				padding: 30px;
				margin-bottom: 10px;
				border-radius: 15px;
			}

			.formu {
				display: inline-block;
				width: 90px;
				margin: 10px;
				margin-left: -30px;
			}

			.botaoForm {
				padding: 10 25 10 25;

				margin-top:25px;
			}


		</style>

	</head>
	<body>

		<!-- Slide Show -->
		<div class="slideshow-container">

				<div class="mySlides fade">
					<div class="numbertext">1 / 6</div>
					<img src="Imagem\onda.jpg" class="imgSlide">
					<div class="text">Ondas</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 6</div>
					<img src="Imagem\solar.jpg" class="imgSlide">
					<div class="text">Solar</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">3 / 6</div>
					<img src="Imagem\eolica.jpg" class="imgSlide">
					<div class="text">Eólica</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">4 / 6</div>
					<img src="Imagem\hidrogenio.jpg" class="imgSlide">
					<div class="text">Hidrogenio</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">5 / 6</div>
					<img src="Imagem\geotermica.jpg" class="imgSlide">
					<div class="text">Geotermica</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">6 / 6</div>
					<img src="Imagem\biomassa.jpg" class="imgSlide">
					<div class="text">Biomassa</div>
				</div>

		</div>

		<!--Menu-->
		<div class="logo">
			<img src="Imagem/Energy_logo.png">
			<ul>
				<li><a href="Home.html">HOME</a></li>
				<li><a href="Solar.html">SOLAR</a></li>
				<li><a href="Eolica.html">EOLICA</a></li>
				<li><a href="Biomassa.html">BIOMASSA</a></li>
				<li><a href="Hidrogenio.html">HIDROGENIO</a></li>
				<li><a href="Geotermica.html">GEOTERMICA</a></li>
				<li><a href="Ondas.html">ONDAS</a></li>
				<li><a class="active" href="Formulario.html">FORMULARIO</a></li>
				<li><a href="app.html">APP</a></li>
			</ul>
		</div>

		<h1><center>Deseja receber mais informações sobre essas energias Inovadoras?</center></h1>
		<h2><center>Preencha as informações a baixo!</center></h2>

		<center>
			<div  class="trocaCor">

				<div class="divForm" style="border: 1px solid black">

					<form action="index.php" method="post">
						<label for="input1" class="formu">Nome: </label>
						<input style="border-radius:10px; padding:3px" type="text" id="input1" size="30px" required><br>

						<label for="input2" class="formu">Telefone: </label>
						<input style="border-radius:10px; padding:3px" type="text" id="input2" size="30px" required><br>


						<label for="input3" class="formu" required="true">Email: </label>
						<input style="border-radius:10px; padding:3px" type="email" placeholder="nome@email.com" id="input3" size="30px" required><br>

						<input class="botaoForm" type="submit" value="Enviar">
					</form>

				</div>

			</div>
	</center>


		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}
			  slides[slideIndex-1].style.display = "block";
			  setTimeout(showSlides, 10000); // Change image every 2 seconds
			}
			</script>

		</body>
</html>
