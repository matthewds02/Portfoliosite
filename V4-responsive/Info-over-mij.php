<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Info over mij</title>
		<link type="text/css" rel="stylesheet" href="lib/stylesheet-php.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	</head>
	<body>
		<header class="site-header">
			<?php include 'lib/header.php';?>
		</header>
		<div class="flex-container">
			<aside class="sidebar">
				<a href="#sport">Sport</a>
				<a href="#school">School</a>
				<a href="#familie">Familie</a>
				<a href="#werk">Werk</a>
			</aside>
			<main id="informatie">
				<h1>Info over mij</h1>
				<div id="sport">
					<h2>Sport</h2>
					<p>Ik ben een sportman, ik speelde een lange tijd <strong>Handbal</strong> bij HC Schoten.</p>
					<p>Nu speel ik voor mijn 3de jaar bij <strong><a class="speciallink" href="https://www.sasja-antwerpen.be/">Sasja</a></strong> in Hoboken.</p>
					<div id="afbeeldingen">
						<article class="article article1">
							<a><img src="afbeeldingen/ploegfoto.jpg" alt="Ploegfoto Schoten"/></a>
							<figcaption>Ik ben nummer 16 rechts onderaan.</figcaption>
						</article>
						<article class="article article2">
							<a><img src="afbeeldingen/ploegfoto2_small.jpg" alt="Ploegfoto Sasja"/></a>
							<figcaption>Ik ben nummer 15 rechts onderaan.</figcaption>
						</article>
					</div>
				</div>
				<div id="school">
					<h2>School</h2>
					<table>
						<tr>
							<th><a>jaar</a></th>
							<th><a>richting</a></th>
							<th><a>school</a></th>
						</tr>
						<tr>
							<th><a class="school 1">De Lagere school</a></th>
							<th><a>/</a></th>
							<th><a>Bloemendaal in Schoten</a></th>
						</tr>
						<tr>
							<th><a class="school 2">De Middelbare school van 1-2</a></th>
							<th><a>iw (Industriële Wetenschappen)</a></th>
							<th><a>Sint-Jozef in Schoten</a></th>
						</tr>
						<tr>
							<th><a class="school 3">De Middelbare school van 3-4</a></th>
							<th><a>EA-ICT (Electronica ICT)</a></th>
							<th><a>Sint-Jozef in Schoten</a></th>
						</tr>
						<tr>
							<th><a class="school 4">De Middelbare school van 5-6</a></th>
							<th><a>itn (IT en Netwerken)</a></th>
							<th><a>Sint-Cordula in Schoten.</a></th>
						</tr>
						<tr>
							<th><a class="school 5">De Hoge school het eerste jaar</a></th>
							<th><a>IoT (Internet of Things)</a></th>
							<th><a>KDG in Hoboken</a></th>
						</tr>
						<tr>
							<th><a class="school 6">De Hoge school het eerste jaar (2de keer)</a></th>
							<th><a class="speciallink" href="https://www.thomasmore.be/opleidingen/graduaat/programmeren-dag-avondonderwijs/programmeren-dagonderwijs/antwerpen-0">graduaat programmeren</a></th>
							<th><a class="speciallink" href="https://www.thomasmore.be/">Thomas More Sint-Andries</a></th>
						</tr>
					</table>
				</div>
				<div id="familie">
					<h2>Familie</h2>
					<p>Mijn familie bestaat uit 4 personen. Een moeder, vader, kleine zus (van 2004) en dan een halfzus (van 1997).</p>
				</div>
				<div id="werk">
					<h2>Werk</h2>
					<p>Ik ben vroeger handbaltrainer geweest voor kinderen rond de 8jaar. Dit was 1x per week op woensdag namiddag</p>
					<p>Nu werk ik in Delhaize (Schoten) doorheen het schooljaar en in de vakantie.</p>
					<p>Als u mijn cv wilt zien kunt u deze altijd <strong><a class="speciallink" href="lib/CV.pdf">hier</a></strong> vinden.</p>
				</div>
			</main>
		</div>
	</body>
</html>
